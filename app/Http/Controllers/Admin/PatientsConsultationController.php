<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClinicalPatient;

class PatientsConsultationController extends Controller
{
    public function index(Request $request){

        $dni        = $request->get('dni');
        $first_name = $request->get('first_name');
        $last_name =  $request->get('last_name');

        $clinicalpatients = ClinicalPatient::orderBy('id','DESC')
            ->dni($dni)
            ->first_name($first_name)
            ->last_name($last_name)
            ->paginate(8);
       
        return view('dashboard.patientsconsultation.verpacientes_consultas',compact('clinicalpatients'));


    }

    public function pacientes_consultas(Request $request){

        //dd("Hola");

        // $dni        = $request->get('dni');
        // $firstname = $request->get('firstname');
        // //$last_name =  $request->get('last_name');

        // $clinicalpatients = ClinicalPatient::orderBy('id','DESC')
        //     ->dni($dni)
        //     ->firstname($firstname)
        //     // ->last_name($last_name)
        //     ->paginate(6);
       
        // return view('dashboard.patientsconsultation.verpacientes_consultas',compact('clinicalpatients'));


    }

}
