<?php

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::resource('/profile', 'ProfileController');
Route::resource('appoints', 'AppointmentsController');

// Office   pathologies
Route::group(['middleware' => 'auth:admin',], function () {
  Route::resource('office/appointments',        'Admin\AppointmentsController');
  Route::resource('office/consultations',       'Admin\ConsultationsController');
  Route::get('office/consultations_mostrar_recipe/{id}','Admin\ConsultationsController@Mostrar_Recipe_Prescripcion');
  Route::get('office/consultations_mostrar_paciente/{id}','Admin\ConsultationsController@Mostrar_Paciente');
  Route::resource('office/patientsconsultation','Admin\PatientsConsultationController');
  Route::resource('office/clinicalpatients',    'Admin\ClinicalPatientsController');
  Route::resource('office/classifications',     'Admin\ClassificationsController');
  Route::resource('office/insurances',       	  'Admin\InsurancesController');
  Route::resource('office/occupations',         'Admin\OccupationsController');
  Route::resource('office/subclassifications',  'Admin\SubclassificationsController');
  Route::resource('office/specialties',         'Admin\SpecialtiesController');
  Route::resource('office/diseases',            'Admin\DiseasesController');
  Route::resource('office/doctors',             'Admin\DoctorsController');
  Route::resource('office/doctorprofile',       'Admin\DoctorProfileController');
  Route::post('office/pdf',                     'Admin\PdfController@generate')->name('pdf_generate');

  Route::resource('office/pathologies',         'Admin\PathologiesController');
  Route::resource('office/subpatologies',       'Admin\SubpatologiesController');
  Route::resource('office/medical_schedules',   'Admin\MedicalSchedulesController');
  Route::get('office/medical_schedules_ver_horario/{id}', 
        'Admin\MedicalSchedulesController@listarHorarioMedico');
  Route::resource('office/explorations',        'Admin\ExplorationsController');
  Route::resource('office/explorations',        'Admin\ExplorationsController');
  Route::resource('office/doctorspecialties',   'Admin\DoctorSpecialtyController');
  Route::get('office/constancias/{id}',         'Admin\ConstanciasController@verpaciente')->name('verpaciente');
  Route::post('office/generarconstancias',      'Admin\ConstanciasPdfController@generate_constancia')
                                                      ->name('pdf_generate_constancia');
});



