<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Appointment;
use App\Doctor;
use App\ClinicalPatient;
use App\DoctorSpecialty;
use App\Specialty;

class AppointmentsController extends Controller
{

    public function mostrar_especialidad_doctor($id) {

    }

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
           return Redirect::back()->withErrors(['Error', 'Informacion sobre doctores no registrada']);
        }

        $doctorspecialty = DB::table('doctor_specialty')
            ->join('doctors', 'doctor_specialty.doctor_id', '=', 'doctors.id')
            ->join('specialties', 'doctor_specialty.specialty_id', '=', 'specialties.id')
            ->select('doctor_specialty.id','specialties.name')
            ->where('doctors.status','=',true)
            ->get();

        if($doctorspecialty == null){
           return Redirect::back()->withErrors(['Error', 'Informacion sobre especialidades de doctores no registrada']);
        }

       return view('appointments.create',compact('doctors','doctorspecialty'));
    }

    
    public function store(Request $request)
    {
        
        $patient = ClinicalPatient::where('user_id', Auth::user()->id)->first();
       
        $appoints = new Appointment();
        $appoints->clinical_patient_id = $patient->id;
        $appoints->doctor_id = $request->doctor_id;
        $appoints->doctor_specialty_id = $request->doctor_specialty_id;
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
