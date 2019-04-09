<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\DoctorSpecialty;
use App\Doctor;
use App\Specialty;

class DoctorSpecialtyController extends Controller
{
    
    public function index()
    {
        $doctorspecialties = DoctorSpecialty::orderBy('id')->paginate();

        $doctors = Doctor::paginate();
       
        return view('dashboard.doctorspecialties.index',compact('doctorspecialties', 'doctors'));
    }

    
    public function create()
    {
        $doctor = Doctor::where('id', 1)->first();
        //$doctors = Doctor::orderBy('last_name')->get();
        if ($doctor == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre Doctores']);
        }

        $specialties = Specialty::orderBy('name')->get();
        if ($specialties == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre Especialidades']);
        }
        //dd($specialties);
        return view('dashboard.doctorspecialties.create',compact('doctor','specialties'));
    }

    
    public function store(Request $request)
    {
       
       $doctor = Doctor::find($request->doctor_id); 

       //Verifica si el doctor y especialidad ya esta registrado en alguna cita
       $doc_esp_citas = DB::table('appointments')
            ->join('doctor_specialty', 'appointments.doctor_specialty_id', '=', 'doctor_specialty.id')
            ->where('appointments.doctor_id', '=', $doctor->id)
            ->get();

       if(count($doc_esp_citas) > 0){
         return redirect()->route('doctorspecialties.index')->with('info','Debe de modificar la especialidad por el modulo de CITAS');
       }
       //--------------------------------------------------------------------

       $doctor->specialities()->sync($request->specialities_ids); 
       
       return redirect()->route('doctorspecialties.index')->with('info','Informacion actualizada');
        
    }

   
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $doctor = Doctor::where('id', 1)->first();
        //$doctors = Doctor::orderBy('last_name')->get();
        if ($doctor == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre Doctores']);
        }

        $specialties = Specialty::orderBy('name')->get();
        if ($specialties == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre Especialidades']);
        }
        //dd($specialties);
        //$doctor = DoctorSpecialty::where('id', 1)->first();
        // $user = DoctorSpecialty::find($id);
        // $user->delete();
        //DB::table('doctor_specialty')->where('doctor_id', '=', $id)->delete();
        return view('dashboard.doctorspecialties.create',compact('doctor','specialties'));
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
