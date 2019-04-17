<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ClinicalPatient;
use Barryvdh\DomPDF\Facade as PDF;

class ConstanciasPdfController extends Controller
{
     public function generate_constancia(Request $request)
    {
    	dd("Hola ");
        $consult = ClinicalPatient::where('id',$request->id)
                   ->first(); 

        dd($request->all());
        // $pdf = PDF::loadView('dashboard.pdf.consultations', compact('consult'))
        //        ->setPaper(array(0,40,419.53,595.28), 'landscape');
           
        // return $pdf->download(
        //     'Recipe de ' . $consult->appointment->clinical_patient->first_name .' '
        //     .$consult->appointment->clinical_patient->last_name . ' , fecha: ' . $consult->appointment->created_at
        //     .'.pdf');

       
        
    }
}
