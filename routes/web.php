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
  Route::get('office/constancias/{id}',         'Admin\ConstanciasController@verpaciente')
             ->name('verpaciente');
  Route::post('office/generarconstancias',      'Admin\ConstanciasPdfController@generate_constancia')
              ->name('pdf_generate_constancia');

 
 // *** Notificacion de consultas a pacientes 29-11-2019 ***
 Route::get('office/notifypatientsappointments', 
    'Admin\NotifyPatientsAppointmentsController@mostrar_citas_medicas')
    ->name('mostrar_citas_medicas');

//*** Notificar_cita_pacientes 30-11-2019 ***
Route::get('office/notifypatientsappointments/{id}', 
    'Admin\NotifyPatientsAppointmentsController@mostrar_cita_pantalla')->name('mostrar_cita_pantalla');
//********************************************

//*** Enviar email Notificando cita 30-11-2019 ***
Route::post('office/notifypatientsappointments',
  'Admin\NotifyPatientsAppointmentsController@enviar_email')->name('enviar_email_notificando_cita');

//********************************************

});


//*******************************************

 Route::get('office/patientsconsultation','Admin\PatientsConsultationController@index')
            ->name('patientsconsultation.index');

 Route::get('office/patientsconsultation_cons/{id}',
    'Admin\PatConController@pacientes_consultas')->name('patientsconsultation_cons.pacientes_consultas');

 Route::get('office/confirmappointments/{id}', 'Admin\NotifyAppointmentController@notificar_cita')
             ->name('notificar_cita');
 Route::post('office/enviarconfirmappointments',
      'Admin\NotifyAppointmentController@enviar_notificacion_cita')->name('email_notificar_cita');
 
// rodolfo
Route::GET('/customauth/reset', 'Admin\CustomAuthController@showLinkRequestForm')
     ->name('admin.customauth.request');
Route::POST('/customauth/email', 'Admin\CustomAuthController@sendResetLinkEmail')
     ->name('admin.customauth.email');
Route::GET('/customauth/reset/{token}', 'Admin\CustomAuthController@showResetForm')
     ->name('admin.customauth.token');
Route::POST('/customauth/reset', 'Admin\CustomAuthController@reset')->name('admin.customauth.reset');



