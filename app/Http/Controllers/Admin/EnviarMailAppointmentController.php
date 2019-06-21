<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// use App\Mail\ConfirmAppointments;
use App\Mail\UserMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EnviarMailAppointmentController extends Controller
{
    //  public function enviar_notificacion_cita(Request $request)
    // {
    	
    // 	$nombre    = $request->first_name;
    // 	$correo    = $request->last_name;
    // 	$content = $request->content;
    // 	dd($content);
    // 	// Mail::to($request->email)->send(new UserMail($content));
    // 	// return redirect()->route('clinical_patients.index')->with('info','Mensaje enviado');
    // }
}
