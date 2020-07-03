<?php

use App\Models\Category;
use App\Models\Course;
use App\Slider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::post('language/{locale}', function (Request $request,$locale) {
    // App::setLocale($locale);
    $request->session()->put('lang', $locale);
});

Route::get('/', function () {
    $latest = Course::where('status',1)->get()->take(3);
    $categories = Category::all();
    $categories1 = Category::where('id', '>=', 1)->first();
    $slider = Slider::all();
    $slider1 = Slider::where('id', '>=', 1)->first();
    $latest1 = Course::where('id', '>=', 1)->where('status',1)->first();
    return view('home.frontend.index', compact('slider', 'categories', 'categories1', 'slider1', 'latest', 'latest1'));
});
/**
 * admin routes
 */
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['Admin']], function () {

        Route::get('dashboard', 'Backend\DashboardController@dashboard')->name('dashboard');
        Route::get('all-users', 'Backend\DashboardController@all_users')->name('all-users');
        Route::get('all-trainers', 'Backend\DashboardController@all_trainers')->name('all_trainers');
        Route::get('all-accounts', 'Backend\DashboardController@accounts')->name('accounts');
        Route::get('all-courses', 'Backend\DashboardController@courses')->name('courses');
        Route::get('change_course_status', 'Backend\DashboardController@change_course_status')->name('change_course_status');
        Route::get('slider', 'Backend\DashboardController@slider')->name('slider');
        Route::get('sales', 'Backend\DashboardController@sell_courses')->name('sales');

        Route::get('category', 'Backend\DashboardController@categories')->name('category');
        Route::POST('save_category', 'Frontend\CategoryController@create')->name('save_category');
        Route::get('delete/category', 'Frontend\CategoryController@delete_category')->name('delete_category');
        Route::get('edit/category', 'Frontend\CategoryController@edit')->name('edit_category');
        Route::post('update/category', 'Frontend\CategoryController@update')->name('update_category');

        Route::post('add-slider-data', 'Backend\DashboardController@sliderdata')->name('slider-data');
        Route::get('edit_slider', 'Backend\DashboardController@edit_slider')->name('slider-edit');
        Route::post('edit-slider-data', 'Backend\DashboardController@update_slider')->name('slider-edit-data');
        Route::get('delete-slider', 'Backend\DashboardController@delete_slider');



    });
});


//trainer
Route::prefix('trainer')->group(function () {
    Route::group(['middleware' => ['Trainer']], function () {

        Route::get('dashboard', 'Trainer\DashboardController@dashboard')->name('Trainer/dashboard');
        Route::get('my-courses', 'Trainer\DashboardController@courses')->name('my_courses');
        Route::get('sell-courses', 'Trainer\DashboardController@sell_courses')->name('sell_courses');
        Route::get('add-form', 'Frontend\CourseController@show')->name('form');
        Route::post('add-course', 'Frontend\CourseController@create')->name('course_data');
        Route::get('edit-course/{id}', 'Frontend\CourseController@edit')->name('edit-course');
        Route::get('delete/{id}', 'Frontend\CourseController@delete')->name('delete');
        Route::post('update-course', 'Frontend\CourseController@update')->name('update-course');
        Route::get('view-lessons/{id}', 'LessonController@index')->name('lessons');
        Route::get('edit-lessons/{id}', 'LessonController@edit')->name('edit_lesson');
        Route::get('add-lesson-form/{id}', 'LessonController@show')->name('form');
        Route::get('edit-lesson-form/{id}', 'LessonController@edit')->name('edit_form');
        Route::post('add-lesson',      'LessonController@store')->name('add_lesson');
        Route::post('update-lesson',   'LessonController@store')->name('update_lesson');
        Route::get('delete-lesson/{id}',    'LessonController@delete')->name('delete');
        Route::get('profile',          'Trainer\DashboardController@profile')->name('profile');
        Route::post('update-profile',  'Trainer\DashboardController@update_profile')->name('update_profile');
        /*trainer page 11*/
        Route::get('trainer-profile', 'Trainer\DashboardController@trainer_profile')->name('trainer_profile');
    });
});

Route::get('userlogin',      'Frontend\LoginController@userLogin')->name('login-form');
Route::post('login_user',    'Frontend\LoginController@login_user')->name('login_user');
Route::get('user-register',  'Frontend\RegisterController@userRegister')->name('register');
Route::get('all-course', 'Frontend\CourseController@onlineCourse')->name('all-course');
Route::get('course-detail', 'Frontend\CourseController@course_detail')->name('detail-course');
Route::get('offline-course', 'Frontend\CourseController@offlineCourse')->name('offline-course');
Route::get('complete-course', 'Frontend\CourseController@completeCourse')->name('complete-course');
Route::get('homePage',        'Frontend\HomeController@homePage')->name('homePage');

Route::get('progressView',    'progresscontroller@fileUpload')->name('progressView');
Route::post('progressStore',  'progresscontroller@fileStore')->name('progressStore');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
