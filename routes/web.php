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

    Route::get('/admin/packages/editpackages/{id}',[AdminDashboard::class,'editpricing'])->name('editprice');

    Route::post('/packageinsert',[AdminDashboard::class,'priceinsert'])->name('packageinsert');

    Route::post('/editoffer',[AdminDashboard::class,'updateoffer'])->name('editoffer');

    Route::get('/admin/visitoripaddress/{id}',[AdminDashboard::class,'visitor'])->name('visitor');

    Route::post('/basicupdate',[AdminDashboard::class,'basicupdate'])->name('basicupdate');

    Route::post('/standardupdate',[AdminDashboard::class,'standaradsupdate'])->name('standardupdate');

    Route::post('/premiumupdate',[AdminDashboard::class,'goldupdate'])->name('premiumupdate');
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
});

/*Apps Start*/
Route::get('/apps',[CategoryController::class,'appshomepage'])->name('apps');

Route::get('/apps/service',[CategoryController::class,'appsservice'])->name('appsservice');

Route::get('/apps/project',[CategoryController::class,'appproject'])->name('appproject');

Route::get('/apps/price',[CategoryController::class,'apppricing'])->name('apppricing');
/*Apps End*/

/*Software Start*/
Route::get('/software',[CategoryController::class,'softwarehompage'])->name('softwarehompage');

Route::get('/software/service',[CategoryController::class,'softwaresservice'])->name('softwaresservice');

Route::get('/software/project',[CategoryController::class,'softwareproject'])->name('softwareproject');

Route::get('/software/price',[CategoryController::class,'softwarepricing'])->name('softwarepricing');
/*Software End*/

/*Website Start*/
Route::get('/website',[CategoryController::class,'websitehomepage'])->name('websitehomepage');

Route::get('/website/service',[CategoryController::class,'websiteservice'])->name('websiteservice');

Route::get('/website/project',[CategoryController::class,'websiteproject'])->name('websiteproject');

Route::get('/website/price',[CategoryController::class,'websitepricing'])->name('websitepricing');
/*Website End*/

/*UI-UX Start*/
Route::get('/ui-ux',[CategoryController::class,'uiuxhomepage'])->name('uiuxhomepage');

Route::get('/ui-ux/project',[CategoryController::class,'uiuxproject'])->name('uiuxproject');

Route::get('/ui-ux/service',[CategoryController::class,'uiuxservice'])->name('uiuxservice');

Route::get('/ui-ux/price',[CategoryController::class,'uiuxpricing'])->name('uiuxpricing');
/*UI-UX End*/

/*Graphic-Design Start*/
Route::get('/graphic-design',[CategoryController::class,'graphicdesignhomepage'])->name('graphicdesignhomepage');

Route::get('/graphic-design/service',[CategoryController::class,'graphicdesignservice'])->name('graphicdesignservice');

Route::get('/graphic-design/project',[CategoryController::class,'graphicdesignproject'])->name('graphicdesignproject');

Route::get('/graphic-design/price',[CategoryController::class,'graphicdesignpricing'])->name('graphicdesignpricing');
/*Graphic-Design End*/
