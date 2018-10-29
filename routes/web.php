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
    Route::resource('office/appointments',        'Admin\AppointmentsController');
    Route::resource('office/clinicalpatients',    'Admin\ClinicalPatientsController');
    Route::resource('office/classifications',     'Admin\ClassificationsController');
    Route::resource('office/insurances',       	  'Admin\InsurancesController');
    Route::resource('office/occupations',         'Admin\OccupationsController');
    Route::resource('office/subclassifications',  'Admin\SubclassificationsController');
    Route::resource('office/specialties',         'Admin\SpecialtiesController');
    Route::resource('office/diseases',            'Admin\DiseasesController');
    Route::resource('office/doctors',             'Admin\DoctorsController');


});



