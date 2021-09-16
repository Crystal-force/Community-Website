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

Route::get('/course', 'CourseController@index')->name('course');
Route::get('/course-detail', 'CourseController@coursedetail')->name('course-detail');


Route::get('/product', 'ProductController@index')->name('products');
Route::get('/product-detail', 'ProductController@productdetail')->name('product-detail');

