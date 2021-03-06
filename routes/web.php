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
    return view('teser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/compte', 'CompteController@index')->name('compte');
Route::post('/compte', 'CompteController@update')->name('update');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/mail', function () {
    return view('email');
});