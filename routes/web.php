<?php

use Illuminate\Support\Facades\Route;
// Front Web Site
use App\Http\Controllers\FrontController;


// For Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\BlogSectionController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\HumanSectionController;
use App\Http\Controllers\Admin\ProfessorSectionController;
use App\Http\Controllers\Admin\WritterSectionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\FooterController;

// For User
use App\Http\Controllers\User\UserController as UController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[FrontController::class,'index'])->name('web.home');
Route::get('/writer',[FrontController::class,'write'])->name('web.write');
Route::get('/professor',[FrontController::class,'professor'])->name('web.professor');
Route::get('/human',[FrontController::class,'human'])->name('web.human');



Auth::routes();


// Dashboard Routes
Route::controller(\App\Http\Controllers\Admin\AdminController::class)->group(function () {

   route::get('/admin','user_login')->name('user-login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess');

   route::get('admin/user-register','userRegister')->name('user-register');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');

   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');
   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::get('resetpassword/{id}','resetpassword')->name('resetpassword');

});

Route::middleware(['auth','can:isAdmin'])->prefix('admin')->group(function()
{
    Route::resource('users', UserController::class);
    Route::get('users/delete', [UserController::class,'delete'])->name('users.del');


    Route::resource('home_section', HomeSectionController::class);
    Route::get('home/delete', [HomeSectionController::class,'delete'])->name('home.del');
    Route::get('home-change-status',[HomeSectionController::class,'change_status'])->name('home-change-status');

    Route::resource('about', AboutSectionController::class);
    Route::get('about/delete', [AboutSectionController::class,'delete'])->name('about.del');
    Route::get('about-change-status',[AboutSectionController::class,'change_status'])->name('about-change-status');

    Route::resource('blog', BlogSectionController::class);
    Route::get('blog-change-status',[BlogSectionController::class,'change_status'])->name('blog-change-status');
    Route::get('blog/delete', [BlogSectionController::class,'delete'])->name('blog.del');

    Route::resource('human', HumanSectionController::class);
    Route::get('human-change-status',[HumanSectionController::class,'change_status'])->name('human-change-status');
    Route::get('human/delete', [HumanSectionController::class,'delete'])->name('human.del');

    Route::resource('professor', ProfessorSectionController::class);
    Route::get('professor-change-status',[ProfessorSectionController::class,'change_status'])->name('professor-change-status');
    Route::get('professor/delete', [ProfessorSectionController::class,'delete'])->name('professor.del');

    Route::resource('writer', WritterSectionController::class);
    Route::get('writer-change-status',[WritterSectionController::class,'change_status'])->name('writer-change-status');
    Route::get('writer/delete', [ProfessorSectionController::class,'delete'])->name('writer.del');

    Route::resource('section2', SectionController::class);
    Route::get('section2-change-status',[SectionController::class,'change_status'])->name('section2-change-status');
    Route::get('section2/delete', [ProfessorSectionController::class,'delete'])->name('section2.del');

    Route::resource('footer', FooterController::class);
    Route::get('footer-change-status',[FooterController::class,'change_status'])->name('footer-change-status');
    Route::get('footer/delete', [ProfessorSectionController::class,'delete'])->name('section2.del');


   Route::controller(AdminController::class)->group(function ()
    {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
        Route::get('change-status', 'change_status')->name('change-status');
        route::post('profile-update','profileUpdate')->name('profile-update');

    });
});

Route::middleware(['auth','can:isUser'])->prefix('user')->group(function(){

    Route::controller(UController::class)->group(function () {


  });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
