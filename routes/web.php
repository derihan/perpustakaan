<?php

// welcome
Route::get('/', function () {
    return view('welcome');
});

//auth
Auth::routes();

//register
Route::get('/home', 'HomeController@index')->name('home');

//login
Route::match(['get','post'],'/admin', 'adminController@login');

//dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard','adminController@dashboard');

    //data buku
    Route::get('/admin/masterData/data_buku','adminController@data_buku');
});


//logout
Route::get('/logout','adminController@logout');