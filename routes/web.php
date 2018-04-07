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

//Route::get('/', function () {
//    return view('/home');
//});

//front
Route::get('/', 'Front\BlogController@home')->name('home');

Route::post('newsletter', 'Front\NewsLetterController@add')->name('newsLetter');

Route::post('sendemail', 'Front\SendEmailController@send')->name('sendemail');
