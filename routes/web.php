<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginandRegistration;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserRegisterandLogin;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Controllers\UserDashbaord;
use App\Http\Controllers\CategoryController;


Route::get('/',[HomepageController::class,'complete'])->name('home');

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $userId = $request->user()->id;
    event(new Verified($request->user()));
    return redirect()->route('homepage',['id'=>$userId]);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth'])->name('verification.send');

Route::get('/forget', function () {
    return view('forget');
})->name('password.request');

Route::post('/forget', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

//Route::get('/reset/{token}', function (string $token) {
//    return view('reset', ['token' => $token]);
//})->name('password.reset');

Route::get('/reset/{token}',[UserRegisterandLogin::class,'showResetForm'])->name('password.reset');

Route::post('/reset', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => $password,
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('register')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');

Route::get('/logout',[UserRegisterandLogin::class,'logout'])->name('logout');

Route::post('/page-visit', [HomepageController::class, 'store']);

Route::get('/about',[HomepageController::class,'aboutuspage'])->name('about');

Route::get('/service',[HomepageController::class,'servicepage'])->name('services');

Route::get('/project',[HomepageController::class,'projectpage'])->name('projectpage');

Route::get('/blog',[HomepageController::class,'blogpage'])->name('blogs');

Route::get('/contact',[HomepageController::class,'contact'])->name('contact');

Route::post('/sendmsg', [HomepageController::class, 'send_msg'])->name('sendmsg');

Route::get('/blog/{title}/{id}',[HomepageController::class,'singleblogpage'])->name('single.blogpage');

Route::get('/project/single-projectpage/{id}', [HomepageController::class, 'singleproject'])->name('singleprojectpages');

Route::get('/pricing',[HomepageController::class,'pricingpages'])->name('price');

Route::get('/registration', function () {
    return view('register');
})->name('register');

Route::post('/registers',[UserRegisterandLogin::class,'registers'])->name('registers');

Route::post('login',[UserRegisterandLogin::class,'logged'])->name('loogin');

Route::get('/admin/registration', function () {
    return view('admin.registration');
});

Route::post('/registration',[AdminLoginandRegistration::class,'register'])->name('registration');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin-login');


Route::post('/logged',[AdminLoginandRegistration::class,'login'])->name('login');

Route::get('/logout',[AdminLoginandRegistration::class,'logout'])->name('logout');

Route::middleware(['admin'])->group(function (){
    Route::get('/admin/dashboard/{id}',[AdminDashboard::class,'showDashboard'])->name('admin.dashboard');

    Route::get('/admin/addproject/{id}',[AdminDashboard::class,'addproject'])->name('project');

    Route::post('/project-upload',[AdminDashboard::class,'projectupload'])->name('project-upload');

    Route::get('/admin/addproject/projects/{id}',[AdminDashboard::class,'projects'])->name('projects');

    Route::get('/admin/addproject/projects/editproject/{id}/{project}',[AdminDashboard::class,'editproject'])->name('editproject');

    Route::post('/edit',[AdminDashboard::class,'editproj'])->name('edit');

    Route::get('/admin/addemployee/{id}',[AdminDashboard::class,'addemployee'])->name('employee');

    Route::post('/employee-upload',[AdminDashboard::class,'employeeupload'])->name('employee-upload');

    Route::get('/admin/addemployee/employeelist/{id}',[AdminDashboard::class,'employeelist'])->name('employees');

    Route::get('/admin/addemployee/employeelist/editemployee/{id}/{project}',[AdminDashboard::class,'editemployee'])->name('editemployee');

    Route::post('/editem',[AdminDashboard::class,'editemp'])->name('editem');

    Route::get('/admin/blog/{id}',[AdminDashboard::class,'blogpage'])->name('blog');

    Route::get('/admin/offerservice/{id}',[AdminDashboard::class,'offerpage'])->name('service');

    Route::post('/offer-upload',[AdminDashboard::class,'uploadoffer'])->name('offer-upload');

    Route::post('/blog-insert',[AdminDashboard::class,'bloginsert'])->name('blog-insert');

    Route::get('/admin/clientlist/{id}',[AdminDashboard::class,'clientlist'])->name('clientlist');

    Route::get('/admin/clientmsg/{id}',[AdminDashboard::class,'clientmsg'])->name('clientmsg');

    Route::get('/admin/calender/{id}',[AdminDashboard::class,'calender'])->name('calender');

    Route::get('/admin/blog/editblog/{id}',[AdminDashboard::class,'editblog'])->name('editblog');

    Route::post('/edits',[AdminDashboard::class,'edits'])->name('edits');

    Route::get('/admin/packages/{id}',[AdminDashboard::class,'pricingpages'])->name('packages');

    Route::get('/admin/appandsoftwarepackages/{id}',[AdminDashboard::class,'apppages'])->name('appandsoftware');

    Route::post('/appsoftwareprices',[AdminDashboard::class,'appsoftwareprice'])->name('appsoftwareprice');

    Route::get('/admin/packages/editpackages/{id}',[AdminDashboard::class,'editpricing'])->name('editprice');

    Route::post('/packageinsert',[AdminDashboard::class,'priceinsert'])->name('packageinsert');

    Route::post('/editoffer',[AdminDashboard::class,'updateoffer'])->name('editoffer');

    Route::get('/admin/visitoripaddress/{id}',[AdminDashboard::class,'visitor'])->name('visitor');

    Route::post('/basicupdate',[AdminDashboard::class,'basicupdate'])->name('basicupdate');

    Route::post('/standardupdate',[AdminDashboard::class,'standaradsupdate'])->name('standardupdate');

    Route::post('/premiumupdate',[AdminDashboard::class,'goldupdate'])->name('premiumupdate');

    Route::post('/upload',[AdminDashboard::class,'imageUpload'])->name('ckeditor.upload');

    Route::get('/admin/uiuxgraphicdesign/{id}',[AdminDashboard::class,'uiux'])->name('uiuxs');

    Route::post('/uiinsert',[AdminDashboard::class,'uiuxinsert'])->name('uiuxinsert');

    Route::post('/uiUpdate',[AdminDashboard::class,'uiupdate'])->name('uiupdate');
});

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/homepage/{id}',[UserRegisterandLogin::class,'dashboard'])->name('homepage');

    Route::get('/about/{id}',[UserDashbaord::class,'aboutuspages'])->name('aboutus');

    Route::get('/service/{id}',[UserDashbaord::class,'servicepage'])->name('servicepages');

    Route::get('/project/{id}',[UserDashbaord::class,'projectpages'])->name('projectpages');

    Route::get('/project/single-project/{id}/{user}',[UserDashbaord::class,'singleprojects'])->name('singlepages');

    Route::get('/blog/{id}',[UserDashbaord::class,'blogpage'])->name('blogspages');

    Route::get('/blog/{users}/{title}/{id}',[UserDashbaord::class,'singleblogpage'])->name('singlepage');

    Route::get('/contact/{id}',[UserDashbaord::class,'contact'])->name('conatactpage');

    Route::get('/pricing/{id}',[UserDashbaord::class,'pricing'])->name('pricing');

    Route::post('/sendmsgs',[UserDashbaord::class,'send_msgs'])->name('sendmsgs');

    Route::get('/apps/{id}',[CategoryController::class,'appshome'])->name('app');

    Route::get('/apps/service/{id}',[CategoryController::class,'appsservices'])->name('appsservices');

    Route::get('/apps/project/{id}',[CategoryController::class,'appprojects'])->name('appprojects');

    Route::get('/apps/price/{id}',[CategoryController::class,'apppricings'])->name('apppricings');

    Route::get('/graphic-design/{id}',[CategoryController::class,'graphicdesignhomepages'])->name('graphicdesignhomepages');

    Route::get('/graphic-design/service/{id}',[CategoryController::class,'graphicdesignservices'])->name('graphicdesignservices');

    Route::get('/graphic-design/project/{id}',[CategoryController::class,'graphicdesignprojects'])->name('graphicdesignprojects');

    Route::get('/graphic-design/price/{id}',[CategoryController::class,'graphicdesignpricings'])->name('graphicdesignpricings');

    Route::get('/ui-ux/{id}',[CategoryController::class,'uiuxhomepages'])->name('uiuxhomepages');

    Route::get('/ui-ux/project/{id}',[CategoryController::class,'uiuxprojects'])->name('uiuxprojects');

    Route::get('/ui-ux/service/{id}',[CategoryController::class,'uiuxservices'])->name('uiuxservices');

    Route::get('/ui-ux/price/{id}',[CategoryController::class,'uiuxpricings'])->name('uiuxpricings');

    Route::get('/website/{id}',[CategoryController::class,'websitehomepages'])->name('websitehomepages');

    Route::get('/website/service/{id}',[CategoryController::class,'websiteservices'])->name('websiteservices');

    Route::get('/website/project/{id}',[CategoryController::class,'websiteprojects'])->name('websiteprojects');

    Route::get('/website/price/{id}',[CategoryController::class,'websitepricings'])->name('websitepricings');

    Route::get('/software/{id}',[CategoryController::class,'softwarehompages'])->name('softwarehompages');

    Route::get('/software/service/{id}',[CategoryController::class,'softwaresservices'])->name('softwaresservices');

    Route::get('/software/project/{id}',[CategoryController::class,'softwareprojects'])->name('softwareprojects');

    Route::get('/software/price/{id}',[CategoryController::class,'softwarepricings'])->name('softwarepricings');

    Route::get('/profile/{id}',[UserDashbaord::class,'profilepage'])->name('profile');

    Route::post('/updateProfile',[UserDashbaord::class,'updateProfile'])->name('updateProfile');
});

/*Apps Start*/
Route::get('home/apps',[CategoryController::class,'appshomepage'])->name('apps');

Route::get('home/apps/service',[CategoryController::class,'appsservice'])->name('appsservice');

Route::get('home/apps/project',[CategoryController::class,'appproject'])->name('appproject');

Route::get('home/apps/price',[CategoryController::class,'apppricing'])->name('apppricing');
/*Apps End*/

/*Software Start*/
Route::get('home/software',[CategoryController::class,'softwarehompage'])->name('softwarehompage');

Route::get('home/software/service',[CategoryController::class,'softwaresservice'])->name('softwaresservice');

Route::get('home/software/project',[CategoryController::class,'softwareproject'])->name('softwareproject');

Route::get('home/software/price',[CategoryController::class,'softwarepricing'])->name('softwarepricing');
/*Software End*/

/*Website Start*/
Route::get('home/website',[CategoryController::class,'websitehomepage'])->name('websitehomepage');

Route::get('home/website/service',[CategoryController::class,'websiteservice'])->name('websiteservice');

Route::get('home/website/project',[CategoryController::class,'websiteproject'])->name('websiteproject');

Route::get('home/website/price',[CategoryController::class,'websitepricing'])->name('websitepricing');
/*Website End*/

/*UI-UX Start*/
Route::get('home/ui-ux',[CategoryController::class,'uiuxhomepage'])->name('uiuxhomepage');

Route::get('home/ui-ux/project',[CategoryController::class,'uiuxproject'])->name('uiuxproject');

Route::get('home/ui-ux/service',[CategoryController::class,'uiuxservice'])->name('uiuxservice');

Route::get('home/ui-ux/price',[CategoryController::class,'uiuxpricing'])->name('uiuxpricing');
/*UI-UX End*/

/*Graphic-Design Start*/
Route::get('home/graphic-design',[CategoryController::class,'graphicdesignhomepage'])->name('graphicdesignhomepage');

Route::get('home/graphic-design/service',[CategoryController::class,'graphicdesignservice'])->name('graphicdesignservice');

Route::get('home/graphic-design/project',[CategoryController::class,'graphicdesignproject'])->name('graphicdesignproject');

Route::get('home/graphic-design/price',[CategoryController::class,'graphicdesignpricing'])->name('graphicdesignpricing');
/*Graphic-Design End*/
