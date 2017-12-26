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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//------------------
// Users
//-------------------
Route::get('/users', 'UserController@index')->name('users');

Route::get('/user/{id}/edit', 'UserController@edit')->name('edit_user');

Route::get('/user/create', 'UserController@create')->name('create_user');

Route::get('/user/delete/{id}', 'UserController@delete')->name('delete_user');

Route::post('/user/update/{id}', 'UserController@update')->name('update_user');
 
Route::post('/user/store', 'UserController@store')->name('store_user');