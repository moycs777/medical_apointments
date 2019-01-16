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
        $consult = Consultation::find($request->id);
        //return $consult; 
        $pdf = PDF::loadView('dashboard.pdf.consultations', compact('consult'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('consult.pdf');
    }
}
