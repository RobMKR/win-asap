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

Route::get('/', 'Controller@main');

Route::group(['middleware' => 'superadmin'], function(){

    Route::get('/admin', 'AdminController@dashboard');
    Route::get('/admin/activate/{id}', 'AdminController@activate');
    Route::get('/admin/deactivate/{id}', 'AdminController@deactivate');
});


Route::post('/register', 'Auth\RegisterController@index');
Route::post('/login', 'Auth\LoginController@index');
Route::get('/logout', 'HomeController@logout');


Route::get('/home', 'HomeController@index');
