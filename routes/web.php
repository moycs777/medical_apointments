<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::resource('/profile', 'ProfileController');

/* Route::get('profile', function () {
    return "prof routre";
})->middleware('verified'); */

// Office
Route::group(['middleware' => 'auth:admin',], function () {
    Route::resource('office/apointments', 'Admin\ApointmentsController');
    Route::resource('office/skills', 'Admin\SkillsController');
    Route::resource('office/memberships', 'Admin\MembershipsController');
});

//moises
// roolfo

//rodo ubuntu

