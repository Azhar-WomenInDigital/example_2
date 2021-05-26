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
    return view('index');
});

Auth::routes();

Route::get('course', 'CourseController@index');
Route::get('course-category/{id}', 'CourseCategoryController@courseCategory')->name('course.category');
Route::post('course/store', 'CourseController@store')->name('course.store');
Route::get('course-category', 'CourseCategoryController@index');
Route::post('course-category/store', 'CourseCategoryController@store')->name('course.category.store');
Route::put('user-course-update', 'CourseController@userCourseUpdate')->name('user.course.update');
Route::get('select-course/{id}', 'CourseController@selectCourse')->name('select.course');
// Route::get('/home', 'HomeController@index')->napme('home');