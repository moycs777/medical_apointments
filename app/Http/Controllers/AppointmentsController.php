<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Appointment;
use App\Doctor;
use App\ClinicalPatient;


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

        return view('appointments.create',compact('doctors'));
    }

    
    public function store(Request $request)
    {
        //dd(Auth::user()->id);
        //dd($request->all());
        //Appointment::create($request->all());
        $patient = ClinicalPatient::where('user_id', Auth::user()->id)->first();

        $appoints = new Appointment();
        $appoints->clinical_patient_id = $patient->id;
        $appoints->doctor_id = $request->doctor_id;
        $appoints->appointment_date = $request->appointment_date;
        $appoints->reason_consultation = $request->reason_consultation;
        $appoints->day = $request->day ? $request->day : 1;
        $appoints->status_1 = $request->status_1 ? $request->status_1 : 1;
        $appoints->status_2 = $request->status_2 ? $request->status_2 : 1;
        $appoints->status = $request->status ? $request->status : 1;
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
