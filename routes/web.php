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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/plastico', 'PlasticoController');

Route::resource('/carton', 'CartonController');

Route::resource('/metal', 'MetalController');

Route::resource('/papel', 'PapelController');

Route::resource('/vidrio', 'VidrioController');