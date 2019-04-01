<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $doctor->specialities()->sync($request->specialities_ids);  

        //return redirect()->route('doctorspecialties.index');
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
