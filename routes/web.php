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

Route::get('/about',[HomepageController::class,'aboutuspage'])->name('about');

Route::get('/service',[HomepageController::class,'servicepage'])->name('services');

Route::get('/project',[HomepageController::class,'projectpage'])->name('projectpage');

Route::get('/blog',[HomepageController::class,'blogpage'])->name('blogs');

Route::get('/contact',[HomepageController::class,'contact'])->name('contact');

Route::post('/sendmsg',[HomepageController::class,'send_msg'])->name('sendmsg');

Route::get('/blog/{title}/{id}',[HomepageController::class,'singleblogpage'])->name('single.blogpage');

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
});

Route::get('/homepage/{id}',[UserRegisterandLogin::class,'dashboard'])->middleware(['auth','verified'])->name('homepage');
