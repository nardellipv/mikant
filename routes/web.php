<?php

//front
Route::get('/', 'Front\BlogController@home')->name('home');

Route::get('post', 'Front\BlogController@index')->name('post');
Route::get('single/{slug}', 'Front\BlogController@single')->name('single');


Route::post('newsletter', 'Front\NewsLetterController@add')->name('newsLetter');

Route::post('sendemail', 'Front\SendEmailController@send')->name('sendemail');


Route::get('index', 'Front\HostingController@index')->name('index');
Route::get('hosting', 'Front\HostingController@hosting')->name('hosting');
Route::get('wphosting', 'Front\HostingController@wphosting')->name('wphosting');
Route::get('searchdomain', 'Front\HostingController@searchdomain')->name('searchdomain');
Route::get('help', 'Front\HostingController@help')->name('help');
Route::get('contact', 'Front\HostingController@contact')->name('contact');
Route::get('term', 'Front\HostingController@term')->name('term');

Route::get('buy/{id}', 'Front\HostingController@buy')->name('buy');
Route::post('search', 'Front\HostingController@search')->name('search');
Route::post('step2/{id}', 'Front\HostingController@step2')->name('step2');
Route::get('step3', 'Front\HostingController@step3')->name('step3');


//back
Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'Back\DashboardController@index')->name('dashboard');


    Route::resource('blog', 'Back\BlogController');
    Route::get('/blog/active/{id}', 'Back\BlogController@active')->name('active');
    Route::get('/blog/desactive/{id}', 'Back\BlogController@desactive')->name('desactive');

    Route::resource('profile', 'Back\ProfileController');

    Route::resource('clients', 'Back\ClientController');
    Route::get('view/{id}', 'Back\ClientController@view')->name('view');

    Route::resource('projects', 'Back\ProjectController');

    Route::resource('payment', 'Back\PaymentController');

    Route::resource('invoice', 'Back\InvoiceController');

    Route::post('invoicesend', 'Front\SendEmailController@invoiceSend')->name('invoicesend');
    Route::post('expirationsend', 'Front\SendEmailController@expirationSend')->name('expirationsend');

    Route::resource('backhosting', 'Back\HostingController');
});