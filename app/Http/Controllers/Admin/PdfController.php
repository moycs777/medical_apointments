<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultationStoreRequest;
use App\Http\Requests\ConsultationUpdateRequest;
use Illuminate\Support\Facades\DB;

use App\Consultation;
use App\Exploration;
use App\Subpatology;
use App\Appointment;
use App\ClinicalPatient;
use App\Disease;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function generate(Request $request)
    {
        //$consult = Consultation::find($request->id)
        $consult = Consultation::where('id',$request->id)
            ->with('appointment')
            ->first(); 

        // $pdf = PDF::loadView('dashboard.pdf.consultations', compact('consult'))
        //     ->setPaper('A5', 'landscape');
        $pdf = PDF::loadView('dashboard.pdf.consultations', compact('consult'))
               ->setPaper(array(0,40,419.53,595.28), 'landscape');
           
        return $pdf->download(
            'Recipe de ' . $consult->appointment->clinical_patient->first_name .' '
            .$consult->appointment->clinical_patient->last_name . ' , fecha: ' . $consult->appointment->created_at
            .'.pdf');

        // $nombre_recipe = 'Recipe de ' . $consult->appointment->clinical_patient->first_name .' '
        //     .$consult->appointment->clinical_patient->last_name . ' , fecha: ' . $consult->appointment->created_at
        //     .'.pdf';

        //return $pdf->stream($nombre_recipe, [ "Attachment" => true]);

        
        //return $pdf->stream(); 
    }
}
