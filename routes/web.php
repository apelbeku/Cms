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
    return view('layouts.index');
});

Route::prefix('/admin')->name('admin.')->group(function () {
	Route::get('/', 'AdminController@index');
});

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
	Route::post('/create', 'ArticleController@create')->name('create');
});
