<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers;
use App\Http\controllers\customAuthcontroller;
use App\Http\controllers\Dashboardcontroller;
use App\Http\controllers\Homecontroller;
use App\Http\controllers\contentcontroller;
use App\Http\controllers\coursescontroller;


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


Route::get('/', [Homecontroller::class, 'welcome']);
Route::get('contact', function () {
    return view('contact');
});

Route::get('course_dtls', [coursescontroller::class, 'course_dtls']);
Route::get('admission', [coursescontroller::class, 'admission']);
Route::get('certificate', [coursescontroller::class, 'certificate']);
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [Dashboardcontroller::class, 'dashboard'])->name('dashboard');
Route::get('dashboard_header', [Dashboardcontroller::class, 'dashboard_header'])->name('dashboard_header');
Route::get('dashboard_footer', [Dashboardcontroller::class, 'dashboard_footer'])->name('dashboard_footer');
Route::get('login', [customAuthcontroller::class, 'login'])->name('login');
Route::post('custom-login', [customAuthcontroller::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [customAuthcontroller::class, 'registration'])->name('register-user');
Route::post('custom-registration', [customAuthcontroller::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [customAuthcontroller::class, 'signOut'])->name('signout');

/*
|--------------------------------------------------------------------------
| User List Routes
|--------------------------------------------------------------------------
*/
Route::get('user_list', [Dashboardcontroller::class, 'user_list'])->name('user_list'); 
Route::get('delete/{id}', [Dashboardcontroller::class, 'delete']);
Route::get('edit/{id}', [Dashboardcontroller::class, 'showData']);
Route::post('edit/', [Dashboardcontroller::class, 'update']); 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('contentview', [contentcontroller::class,'content'])->name('contentview'); 
Route::post('update/{id}', [contentcontroller::class, 'update']);

Route::get('course_list', [coursescontroller::class,'list'])->name('course_list'); 
Route::get('update/{id}', [coursescontroller::class, 'showData']);
Route::post('update/', [coursescontroller::class, 'update']); 

Route::get('course', [coursescontroller::class,'course'])->name('course');
Route::get('up/{id}', [coursescontroller::class,'up']);
Route::post('up/', [coursescontroller::class,'edit']);
 Route::get('about', [Homecontroller::class, 'about']);