<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//user Controller

Route::get('/','UserController@index')->name('index');
Route::get('/login','UserController@create')->name('create_login');
Route::get('/register','UserController@register')->name('user_register');
Route::get('/contact','UserController@contact')->name('contact');
Route::post('/add_user','UserController@store')->name('add_user');
Route::post('/login','UserController@login')->name('login');
Route::get('/account','UserController@account')->name('account')->middleware('auth');
Route::get('/logout','UserController@logout')->name('logout');
Route::post('edit_user','UserController@edituser')->name('edit_user');


//Profile Controller
Route::get('/add_profile','ProfileController@add_profile')->name('add_profile');
Route::get('/show_profile/','ProfileController@show_profile')->name('show_profile');
Route::post('/add_work','ProfileController@store')->name('add_work');
Route::post('/editprofilr','ProfileController@editprofile')->name('editprofile');

//Product Controller
Route::post('/add_product','ProductsController@store')->name('add_product');
Route::get('/ahowproduct/{id}','ProductsController@show_product')->name('show_product');
Route::get('/product_delete/{id}','ProductsController@delete')->name('delete_product');
Route::post('edit_product','ProductsController@updateProduct')->name('edit_product');

//Admin Controller
Route::get('dashboard','AdminController@dashboard')->name('dashboard')->middleware('auth');
Route::get('countries','AdminController@show_countries')->name('show_countries');
Route::post('add_country','AdminController@add_country')->name('add_country');
Route::get('governments/{id}','AdminController@show_governments')->name('show_governments');
Route::post('add_government','AdminController@add_government')->name('add_government');
Route::get('cities/{id}','AdminController@show_cities')->name('show_cities');
Route::post('add_city','AdminController@add_city')->name('add_city');
Route::get('streets/{id}','AdminController@show_streets')->name('show_streets');
Route::post('add_street','AdminController@add_street')->name('add_street');
Route::get('specifications','AdminController@show_specifications')->name('show_specifications');
Route::post('specifications','AdminController@add_specification')->name('add_specification');
Route::get('all_pages/','AdminController@show_work_pages')->name('show_work_pages');
Route::get('admins/','AdminController@admins')->name('admins');
Route::post('admin','AdminController@admin')->name('add_admin');
Route::get('ads','AdminController@get_ads')->name('get_ads');
Route::post('new_ads','AdminController@new_ads')->name('new_ads');
Route::get('deleteads/{id}','AdminController@delete_ads')->name('delete_ads');

Route::get('get_governrare','UserController@GetGovenrateByCountryId');
Route::get('get_city','UserController@getcitybyid');
Route::get('get_street','UserController@getstreetbyid');

Route::get('/search','HomeController@searchAll')->name('search');
Route::get('company/{id}','HomeController@find_company')->name('get_company');
Route::get('product/{id}','HomeController@find_product')->name('find_product');