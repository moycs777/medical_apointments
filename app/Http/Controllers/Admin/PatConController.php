<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Consultation;
use App\ClinicalPatient;
use App\Appointment;

class PatConController extends Controller
{
    public function pacientes_consultas($id){
    	
        $patcon = DB::table('clinical_patients')
            ->join('appointments','clinical_patients.id', '=', 'appointments.clinical_patient_id')
            ->join('consultations', 'appointments.id', '=', 'consultations.appointment_id')
            ->select('consultations.id','clinical_patients.first_name','clinical_patients.last_name',
                     'consultations.date_consultation', 'consultations.reason_consultation')
            ->where('clinical_patients.id', '=', $id)
            ->orderBy('consultations.id','DESC')
            ->get();
            
         if(count($patcon) <= 0){
         	//return back();
         	return redirect()->route('patientsconsultation.index')
         					 ->withErrors(['No existe informacion sobre consultas medicas']);
         }

         return view('dashboard.patientsconsultation.pacientes_consultas',compact('patcon'));
    }
}
