<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Admin\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\ClinicalPatient;


class ConstanciasController extends Controller
{
   public function verpaciente($id){

   	  $paciente = ClinicalPatient::find($id);

      return view('dashboard.constancias.verpaciente',compact('paciente'));
   }

   // public function generate_constancia(Request $request)
   //  {
   //      //$consult = Consultation::find($request->id)
   //      $paciente = ClinicalPatient::where('id',$request->id)
   //                 ->first(); 

   //      dd($request->all());
   //      // $pdf = PDF::loadView('dashboard.pdf.consultations', compact('consult'))
   //      //        ->setPaper(array(0,40,419.53,595.28), 'landscape');
           
   //      // return $pdf->download(
   //      //     'Recipe de ' . $consult->appointment->clinical_patient->first_name .' '
   //      //     .$consult->appointment->clinical_patient->last_name . ' , fecha: ' . $consult->appointment->created_at
   //      //     .'.pdf');

        
        
   //  }
}
