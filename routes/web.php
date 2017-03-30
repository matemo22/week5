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


Route::get('forms', function () {
    return view('forms');
});

Route::post('forms', 'FormController@index')->name('forms');

Route::get('mail', function() {
	return view('mail');
});

Route::post('send_email', 'MailController@send');