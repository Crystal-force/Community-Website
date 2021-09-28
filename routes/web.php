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


Route::get('/', 'HomeController@index')->name('main')->middleware('guest');

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
Route::get('/blog-detail', 'BlogController@blogdetail')->name('blog-detail');



Route::get('/login', 'NewAuth\LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'NewAuth\LoginController@login')->middleware('guest');;

Route::get('register', 'NewAuth\RegisterController@index')->name('register');
Route::post('/register', 'NewAuth\RegisterController@register');

Route::get('/forgot-password', 'NewAuth\ForgotController@index')->name('forgot-password');

Route::get('/logout', 'NewAuth\LoginController@logout');
  


Route::middleware(['auth'])->group(function(){
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
  Route::prefix('dashboard')->group(function($sub_route) {
    $sub_route->post('/save-avatar', 'CompaniesController@saveavatar');
    $sub_route->get('/edit-profile', 'CompaniesController@editprofile')->name('edit-profile');
    $sub_route->post('/update-profile', 'CompaniesController@updateprofile');
    $sub_route->get('/post-service', 'PostController@index')->name('post-service');
    $sub_route->get('/lg-companies', 'CompaniesController@logged_companies')->name('lg-companies');
    $sub_route->get('/lg-companies-profile', 'CompaniesController@logged_companiesprofile')->name('lg-companies-profile');
    $sub_route->get('/lg-course', 'CourseController@logged_course')->name('lg-course');
    $sub_route->get('/lg-course-detail', 'CourseController@logged_coursedetail')->name('lg-course-detail');
    $sub_route->get('/lg-products', 'ProductController@logged_products')->name('lg-products');
    $sub_route->get('/lg-product-detail', 'ProductController@logged_products_detail')->name('lg-product-detail');
    $sub_route->get('new-product', 'ProductController@newproduct')->name('new-product');
    $sub_route->get('/lg-forum', 'ForumsController@logged_forum')->name('lg-forum');
    $sub_route->get('/lg-forum-comment', 'ForumsController@logged_forum_comment')->name('lg-forum-comment');
    $sub_route->get('/new-topic', 'ForumsController@newtopic')->name('new-topic');
    $sub_route->get('/edit-course', 'CourseController@editcourse')->name('edit-course');
    $sub_route->get('/edit-product', 'ProductController@editproduct')->name('edit-product');
    $sub_route->get('/user-list', 'UserController@userlist')->name('user-list');
    $sub_route->get('/account-setting', 'AccountController@accountsetting')->name('account-setting');
  });
});