<?php

//front
Route::get('/', 'Front\BlogController@home')->name('home');

Route::get('post', 'Front\BlogController@index')->name('post');
Route::get('single/{id}', 'Front\BlogController@single')->name('single');


Route::post('newsletter', 'Front\NewsLetterController@add')->name('newsLetter');

Route::post('sendemail', 'Front\SendEmailController@send')->name('sendemail');


//back
Auth::routes();

Route::get('/dashboard', 'Back\DashboardController@index')->name('dashboard');

Route::resource('blog','Back\BlogController');
Route::get('/blog/active/{id}', 'Back\BlogController@active')->name('active');
Route::get('/blog/desactive/{id}', 'Back\BlogController@desactive')->name('desactive');

Route::resource('profile', 'Back\ProfileController');

Route::resource('clients', 'Back\ClientController');