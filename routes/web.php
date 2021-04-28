<?php

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

// 登入頁
Route::view('login', 'auth.login')->name('login.index');
Route::post('login', 'Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
	// 主頁Dashboard
	Route::get('/', 'HomeController@index')->middleware('auth')->name('home');

	Route::get('users', 'UserController@index')->name('user.list');
});
