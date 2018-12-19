<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Appointment;
use App\Doctor;
use App\ClinicalPatient;
use App\Specialty;


class AppointmentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $patient = ClinicalPatient::where('user_id', Auth::user()->id)->first();

        $appointments = Appointment::where('clinical_patient_id', $patient->id)
            ->orderBy('id','DESC')
            ->paginate();

        return view('appointments.index', compact('appointments'));
    }

    
    public function create()
    {
        $doctors = Doctor::all();
        if($doctors == null){
           return Redirect::back()->withErrors(['Error', 'Informacionsobre doctores no registrada']);
        }

        return view('appointments.create',compact('doctors'));
    }

    
    public function store(Request $request)
    {
        
        $patient = ClinicalPatient::where('user_id', Auth::user()->id)->first();
       
        $appoints = new Appointment();
        $appoints->clinical_patient_id = $patient->id;
        $appoints->doctor_id = $request->doctor_id;
        $appoints->appointment_date = $request->appointment_date;
        $appoints->reason_consultation = $request->reason_consultation;
        
        $appoints->save();

        return redirect()->route('appoints.index');
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
