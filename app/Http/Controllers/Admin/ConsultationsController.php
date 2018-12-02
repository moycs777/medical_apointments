<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Consultation;
use App\Exploration;
use App\Subpatology;
use App\Appointment;
use App\ClinicalPatient;


class ConsultationsController extends Controller
{
    public function Mostrar_Recipe_Prescripcion($id)
    {
        
        //dd($id);
        $subpatology = Subpatology::where('id', $id)->first();
        if ($subpatology == null) {
            return Redirect::back()->withErrors(['Error', 'Subpatologia no registrada']);
        }
       
        return response()->json(
            $subpatology->toArray()
        );
        
    }

    public function Mostrar_Paciente($id)
    {
       // return response()->json(
       //      $id->toArray()
       //  );;
        
        //$appointment = ClinicalPatient::where('id', $id)->first();
            // ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
            // ->select('appointments.id','appointments.reason_consultation',
            //          'clinical_patients.first_name', 'clinical_patients.last_name')
            // ->where('appointments.status','=','pendiente')
            // ->where('appointments.id', '=', 1)
            // ->get();

        $appointment = DB::table('appointments')
            ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
            ->select('appointments.id','appointments.reason_consultation',
                     'clinical_patients.first_name', 'clinical_patients.last_name')
            ->where('appointments.status','=','pendiente')
            ->where('appointments.id', '=', $id)
            ->get();
      
        return response()->json(
            $appointment->toArray()
        );
    }

    public function index()
    {
        $consultations = Consultation::orderBy('id','DESC')->paginate();
        return view('dashboard.consultations.index', compact('consultations'));
    }

    public function create()
    {
        // Citas pendientes
            
        $appointments = DB::table('appointments')
            ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
            ->select('appointments.id','appointments.appointment_date',
                     'clinical_patients.first_name', 'clinical_patients.last_name')
            ->where('status','=','pendiente')
            ->get();
        if ($appointments == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre citas']);
        }

        
        //dd($appointments);
        $explorations = Exploration::where('specialty_id','9')->orderBy('name')->get();
        if ($explorations == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de exploraciones']);
        }

        $subpatologies = Subpatology::orderBy('name')->get();;
        if ($subpatologies == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        return view('dashboard.consultations.create',compact('explorations','subpatologies','appointments'));
    }

    
    public function store(Request $request)
    {
        dd($request->all());
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
