<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

use App\Mail\UserMail;

class NotifyPatientsAppointmentsController extends Controller
{
    public function mostrar_citas_medicas()
    {

    	$patient = DB::table('clinical_patients')
            ->select('clinical_patients.id as nro_paciente',
                'clinical_patients.first_name',
                'clinical_patients.last_name',
                'appointments.id',
                'appointments.appointment_date',
            	'appointments.time_consultation',
                'appointments.status',
                'users.email')
            ->join('users','users.id','=','clinical_patients.user_id')
            ->join('appointments','appointments.clinical_patient_id','=','clinical_patients.id')
            ->whereIn('appointments.status',array('confirmado'))
            ->orderBy('appointments.appointment_date', 'clinical_patients.id')
            ->get();
        
        return view('dashboard.notifypatientsappointments.index',compact('patient'));
    }

    public function mostrar_cita_pantalla($id){



        $info_email=DB::table('appointments')
             ->select('appointments.appointment_date','appointments.time_consultation',
                'clinical_patients.first_name','clinical_patients.last_name','appointments.id','users.email')
            ->join('clinical_patients','clinical_patients.id','=','appointments.clinical_patient_id')
            ->join('users','users.id','=','clinical_patients.user_id')
            ->where('appointments.id','=',$id)
            ->get();
        
        return view('dashboard.notifypatientsappointments.notify_appointments',compact('info_email'));
        

    }

    public function enviar_email(request $request)
    {

        $a = $request; 

        Mail::to($request->email)->send(new UserMail($request->content,$request->title));
       
        return redirect()->route('mostrar_citas_medicas')
               ->with('info','Correo enviado satisfactoriamente');
        
    }
        
}


