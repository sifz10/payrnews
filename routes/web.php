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

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/register', 'RegisterController@register')->name('register');
Route::get('/createPost', 'PostController@create')->name('createPost');
Route::post('/post/request', 'PostController@postRequest')->name('send.post.request');

Route::get('/users', 'UsersController@allUsers')->name('users');
Route::get('/pendingPost', 'PostController@ShowPendingBlog')->name('pendingPost');
Route::get('/signleBlog/{id}', 'PostController@ShowsignleBlog')->name('signleBlog');
Route::post('/signleBlog/{id}', 'PostController@postUpdate')->name('signleBlogUpdate');
Route::get('/PostApprove{id}', 'PostController@PostApprove')->name('PostApprove');
Route::get('/PostDenied{id}', 'PostController@PostDenied')->name('PostDenied');
