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
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@loginProcess')->name('login');

Route::get('/login/register', 'AuthController@register')->name('register');
Route::post('/registration-process', 'AuthController@registrationProcess')->name('register');
Route::post('/logout', 'AuthController@logout')->name('logout');


	Route::get('/', function () {
	    return view('welcome');
	});
	Route::get('/website', function () {
		return view('website');
	});

Route::middleware('auth')->group(function () {

	Route::prefix('/admin')->name('admin.')->group(function () {
		Route::get('/', 'AdminController@index');

		Route::prefix('/category')->name('category.')->group(function () {
			Route::get('/', 'CategoryController@index')->name('index');
			Route::get('/create', 'CategoryController@create')->name('create');
			Route::post('/store', 'CategoryController@store')->name('store');
			Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
			Route::put('/edit/{id}', 'CategoryController@update')->name('update');
			Route::delete('/delete/{id}', 'CategoryController@destroy')->name('delete');
		});

		Route::prefix('/article')->name('article.')->group(function () {
			Route::get('/', 'ArticleController@index')->name('index');
			Route::get('/create', 'ArticleController@create')->name('create');
			Route::post('/store', 'ArticleController@store')->name('store');
			Route::get('/edit/{id}', 'ArticleController@edit')->name('edit');
			Route::put('/edit/{id}', 'ArticleController@update')->name('update');
			Route::delete('/delete/{id}', 'ArticleController@destroy')->name('delete');
		});

		Route::prefix('/user')->name('user.')->group(function () {
			Route::get('/', 'UserController@index')->name('index');
			Route::get('/create', 'UserController@create')->name('create');
			Route::post('/store', 'UserController@store')->name('store');
			Route::get('/edit/{id}', 'UserController@edit')->name('edit');
			Route::put('/edit/{id}', 'UserController@update')->name('update');
			Route::delete('/delete', 'UserController@destroy')->name('delete');
		});
	});

});