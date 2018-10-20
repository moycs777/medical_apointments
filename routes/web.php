<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::resource('/profile', 'ProfileController');

/* Route::get('profile', function () {
    return "prof routre";
})->middleware('verified'); */

// Office
Route::group(['middleware' => 'auth:admin',], function () {
    Route::resource('office/appointments', 'Admin\AppointmentsController');
    Route::resource('office/clinicalpatients', 'Admin\ClinicalPatientsController');
    
});

//moises
// roolfo

//rodo ubuntu

