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


Route::get('/', 'HomeController@index')->name('main');

Route::get('/login', 'NewAuth\LoginController@index')->name('login');
Route::get('register', 'NewAuth\RegisterController@index')->name('register');
Route::get('/forgot-password', 'NewAuth\ForgotController@index')->name('forgot-password');

Route::get('/course', 'CourseController@index')->name('course');
Route::get('/course-detail', 'CourseController@coursedetail')->name('course-detail');

Route::get('/companies', 'CompaniesController@index')->name('companies');
Route::get('/companies-profile', 'CompaniesController@companiesprofile')->name('companies-profile');

Route::get('/product', 'ProductController@index')->name('products');
Route::get('/product-detail', 'ProductController@productdetail')->name('product-detail');


Route::get('/how-it-work', 'AboutController@index')->name('how-it-work');

Route::get('/forums', 'ForumsController@index')->name('forums');
Route::get('/forum-comment', 'ForumsController@forumcomment')->name('forum-comment');

Route::get('/blog', 'BlogController@index')->name('blog');