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

 
Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//------------------
// Users
//-------------------
Route::get('/users', 'UserController@index')->name('users');

Route::get('/users/{id}/edit', 'UserController@edit')->name('edit_user');

Route::get('/users/create', 'UserController@create')->name('create_user');

Route::get('/users/delete/{id}', 'UserController@delete')->name('delete_user');

Route::post('/users/update/{id}', 'UserController@update')->name('update_user');
 
Route::post('/users/store', 'UserController@store')->name('store_user');

//---------------------------
// Portfolio
//----------------------------

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::get('/portfolio/create', 'PortfolioController@create')->name('create_potfolio');

Route::get('/portfolio/delete/{id}', 'PortfolioController@delete')->name('delete_potfolio');

Route::get('/portfolio/{id}/edit', 'PortfolioController@edit')->name('edit_potfolio');

Route::post('/portfolio/update/{id}', 'PortfolioController@update')->name('update_potfolio');

Route::post('/portfolio/store', 'PortfolioController@store')->name('store_portfolio');

//---------------------------
// Categories
//----------------------------

Route::get('/categories', 'CategoriesController@index')->name('categories');

Route::get('/categories/new', 'CategoriesController@create')->name('new_category');

Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('delete_category');

Route::get('/categories/{id}/edit', 'CategoriesController@edit')->name('edit_category');

Route::post('/categories/update/{id}', 'CategoriesController@update')->name('update_category');

Route::post('/categories/store', 'CategoriesController@store')->name('store_category');