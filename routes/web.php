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
    return view('/contact/contact');
});

Route::get('contact', function () {
    return view('/contact/contact-list');
});

Route::get('contact', 'ContactController@index');
Route::get('contact', 'ContactController@shwo');
Route::get('contact', 'ContactController@creat');
Route::get('contact', 'ContactController@store');
