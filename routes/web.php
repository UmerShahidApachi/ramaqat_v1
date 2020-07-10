<?php

use App\Models\Category;
use App\Models\Course;
use App\Setting;
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
Route::get('contact-us', function () {
    $data = Setting::where('id',1)->first();

    return view('contact',compact('data'));
});
Route::get('/', function () {
    $latest = Course::where('status',1)->orderByRaw('RAND()')->take(12)->get();
    $latest2 = Course::where('status',1)->orderByRaw('RAND()')->take(3)->get();
    $all = Course::where('status',1)->orderByRaw('RAND()')->take(12)->get();
    $categories1 = Category::take(3)->get();
    $slider = Slider::all();
    $slider1 = Slider::where('id', '>=', 1)->first();
    $latest1 = Course::where('status',1)->orderByRaw('RAND()')->take(3)->get();
    $setting = Setting::where('id',1)->first();

    return view('home.frontend.index', compact('slider', 'all', 'categories1', 'slider1', 'latest', 'latest1','latest2','setting'));
});
/**
 * admin routes
 */
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['Admin']], function () {

        Route::get('dashboard', 'Backend\DashboardController@dashboard')->name('dashboard');
        Route::get('sales', 'Backend\DashboardController@sell_courses')->name('sales');
        Route::get('settings',  'SettingController@index')->name('settings');
        Route::post('update-settings',  'SettingController@update')->name('update_settings');
        Route::get('percentages',  'PercentageController@index')->name('percentages');
        Route::post('update-percentages',  'PercentageController@update')->name('update_percentages');
        Route::get('all-users', 'Backend\DashboardController@all_users')->name('all-users');
        Route::get('all-trainers', 'Backend\DashboardController@all_trainers')->name('all_trainers');
        Route::get('delete-user', 'Backend\UserController@delete_users')->name('delete_users');
        Route::get('add/user', 'Backend\UserController@new_user_form')->name('new_user_form');
        Route::post('new-profile', 'Backend\UserController@new_profile')->name('admin_new_profile');
        Route::get('edit-profile', 'Backend\UserController@edit')->name('edit_profile');
        Route::post('update-profile', 'Backend\UserController@update_profile')->name('admin_update_profile');




        Route::get('all-accounts', 'Backend\DashboardController@accounts')->name('accounts');

        Route::get('all-courses', 'Backend\DashboardController@courses')->name('courses');
        Route::get('add-course', 'Backend\DashboardController@add_course')->name('add-course');
        Route::post('course/update', 'Backend\DashboardController@course_store')->name('course_store');
        Route::get('course/edit/{id}', 'Backend\DashboardController@course_edit');
        Route::post('course/updated', 'Backend\DashboardController@course_update')->name('update_course');

        Route::get('delete', 'Frontend\CourseController@delete')->name('delete');

        Route::get('change_course_status', 'Backend\DashboardController@change_course_status')->name('change_course_status');

        Route::get('slider', 'Backend\DashboardController@slider')->name('slider');
        Route::post('add-slider-data', 'Backend\DashboardController@sliderdata')->name('slider-data');
        Route::get('edit_slider', 'Backend\DashboardController@edit_slider')->name('slider-edit');
        Route::post('edit-slider-data', 'Backend\DashboardController@update_slider')->name('slider-edit-data');
        Route::get('delete-slider', 'Backend\DashboardController@delete_slider');


        Route::get('currency', 'Backend\CurrencyController@index')->name('currency');
        Route::post('currency/store', 'Backend\CurrencyController@store')->name('save_currency');
        Route::get('edit/currency', 'Backend\CurrencyController@edit');
        Route::post('currency/updates', 'Backend\CurrencyController@update')->name('update_currency');
        Route::get('delete/currency', 'Backend\CurrencyController@destroy');

        Route::get('category', 'Backend\DashboardController@categories')->name('category');
        Route::POST('save_category', 'Frontend\CategoryController@create')->name('save_category');
        Route::get('delete/category', 'Frontend\CategoryController@delete_category')->name('delete_category');
        Route::get('edit/category', 'Frontend\CategoryController@edit')->name('edit_category');
        Route::post('update/category', 'Frontend\CategoryController@update')->name('update_category');





    });
});


//trainer
Route::prefix('trainer')->group(function () {
    Route::group(['middleware' => ['Trainer']], function () {

        Route::get('dashboard', 'Trainer\DashboardController@dashboard')->name('Trainer/dashboard');
        Route::get('my-courses', 'Trainer\DashboardController@courses')->name('my_courses');
        Route::get('sell-courses', 'Trainer\DashboardController@sell_courses')->name('sell_courses');
        Route::get('favorite-courses', 'Trainer\DashboardController@fvt')->name('user_fvt');
        Route::get('add-form', 'Frontend\CourseController@show')->name('form');
        Route::post('add-course', 'Frontend\CourseController@create')->name('course_data');
        Route::get('edit-course/{id}', 'Frontend\CourseController@edit')->name('edit-course');
        Route::get('delete', 'Frontend\CourseController@delete')->name('delete');
        Route::post('update-course', 'Frontend\CourseController@update')->name('update-course');
        Route::get('view-lessons/{id}', 'LessonController@index')->name('lessons');
        Route::get('edit-lessons/{id}', 'LessonController@edit')->name('edit_lesson');
        Route::get('add-lesson-form/{id}', 'LessonController@show')->name('lesson_form');
        Route::get('edit-lesson-form/{id}', 'LessonController@edit')->name('edit_form');
        Route::post('add-lesson',      'LessonController@store')->name('add_lesson');
        Route::post('update-lesson',   'LessonController@update')->name('update_lesson');
        Route::get('delete-lesson/{id}',    'LessonController@delete')->name('delete');
        Route::get('profile',          'Trainer\DashboardController@profile')->name('profile');
        Route::post('update-profile',  'Trainer\DashboardController@update_profile')->name('update_profile');
        /*trainer page 11*/
        Route::get('trainer-profile', 'Trainer\DashboardController@trainer_profile')->name('trainer_profile');

        Route::post('section/add',      'LessonController@add_section')->name('add_section');
        Route::get('get_section/{id}',      'LessonController@get_section');

        Route::get('edit_lessons/{id}', 'LessonController@edit');



    });
});


Route::prefix('user')->group(function () {
    Route::group(['middleware' => ['User']], function () {
        Route::get('become_trainer', 'Backend\UserController@become_trainer')->name('become_trainer');
        Route::get('my-course', 'Frontend\CourseController@my_course')->name('my-courses');

    });
});
Route::get('userlogin', 'Frontend\LoginController@userLogin')->name('login-form');
Route::post('login_user', 'Frontend\LoginController@login_user')->name('login_user');
Route::get('trainer-register', 'Frontend\RegisterController@userRegister')->name('trainer_register');
Route::get('all-course', 'Frontend\CourseController@onlineCourse')->name('all-course');
Route::get('trainer-profile', 'Backend\UserController@trainer_profile')->name('trainer_profile');
Route::get('add-to-favorite', 'Backend\UserController@fvt')->name('fvt');
Route::get('course-detail', 'Frontend\CourseController@course_detail')->name('detail-course');
Route::get('offline-course', 'Frontend\CourseController@offlineCourse')->name('offline-course');
Route::get('complete-course', 'Frontend\CourseController@completeCourse')->name('complete-course');
Route::get('homePage',        'Frontend\HomeController@homePage')->name('homePage');

Route::post('user/rating',        'Frontend\HomeController@gaveRating')->name('gaveRating');


Route::get('progressView',    'progresscontroller@fileUpload')->name('progressView');
Route::post('progressStore',  'progresscontroller@fileStore')->name('progressStore');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show_lesson/{id}', 'Frontend\LessonController@index');


//user
Route::get('/form', 'User\HomeController@index');
