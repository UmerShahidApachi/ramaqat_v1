<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.frontend.index');
});
/**
 * admin routes
 */
Route::prefix('admin')->group(function (){
    Route::get('dashboard','Backend\DashboardController@dashboard')->name('dashboard');
    Route::get('all-users','Backend\DashboardController@all_users')->name('all-users');
    Route::get('slider','Backend\DashboardController@slider')->name('slider');
    Route::get('add-slider-data','Backend\DashboardController@sliderdata')->name('slider-data');
});
Route::get('userlogin','Frontend\LoginController@userLogin')->name('login');
Route::get('user-register','Frontend\RegisterController@userRegister')->name('register');
Route::get('online-course','Frontend\CourseController@onlineCourse')->name('online-course');
Route::get('offline-course','Frontend\CourseController@offlineCourse')->name('offline-course');
Route::get('homePage','Frontend\HomeController@homePage')->name('homePage');

Route::get('progressView','progresscontroller@fileUpload')->name('progressView');

Route::post('progressStore','progresscontroller@fileStore')->name('progressStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
