<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClinicalPatient;

//use App\Mail\ConfirmAppointments;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\UserMail;

class NotifyAppointmentController extends Controller
{
    
    public function notificar_cita($id)
    {

      
    	//$patient = ClinicalPatient::find($id);

        $patient = DB::table('clinical_patients')
            ->select('clinical_patients.id','clinical_patients.first_name','clinical_patients.last_name','users.email')
            ->join('users','users.id','=','clinical_patients.user_id')
            ->where('clinical_patients.id','=',$id)
            ->get();
        //dd($patient);
    	return view('dashboard.emails.notify_appointments',compact('patient'));
    }

    public function enviar_notificacion_cita(Request $request)
    {
    	$a = $request; 
        //dd($request->all());
    	//$patient = ClinicalPatient::find($request->$id);
    	// $nombre    = $request->nombre;
    	// $correo    = $request->correo;
    	// $contenido = $request->contenido;
    	//Mail::to($request->email)->send(new ConfirmAppointments());
    	//return "Mensaje enviado";

        Mail::to($request->email)->send(new UserMail($request->content,$request->title));
        //Mail::to($request->email)->send(new UserMail($a->first_name));
        return "Se ha enviado el correo";
    }
   
}
