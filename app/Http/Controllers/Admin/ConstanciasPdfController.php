<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ClinicalPatient;
use Barryvdh\DomPDF\Facade as PDF;

//->setPaper(array(0,40,419.53,595.28), 'portrait');
class ConstanciasPdfController extends Controller
{
     public function generate_constancia(Request $request)
    {
    	
        $paciente = ClinicalPatient::where('id',$request->id)
                   ->first(); 
        
        $detalle = $request->detalle;
        $pdf = PDF::loadView('dashboard.pdf.constancia', compact('paciente','detalle'))
               ->setPaper(array(0,60,419.53,500), 'portrait');

        return $pdf->download(
            'Constancia :' . $paciente->first_name .' ' . $paciente->last_name . ' , fecha: ' 
            . date('d-m-Y H:i:s') .'.pdf');
   }
}
