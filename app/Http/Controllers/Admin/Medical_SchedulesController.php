<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

use App\MedicalSchedule;
use App\Doctor;

class Medical_SchedulesController extends Controller
{
   
    public function index()
    {
        //$nroreg = DB::table('medical_schedules')->count();
        $medical_schedules = MedicalSchedule::orderBy('id','DESC')->paginate();
        return view('dashboard.medical_schedules.index',compact('medical_schedules'));
    }

    
    public function create()
    {
        $medicalschedule = DB::table('medical_schedules')->count();
        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();

        return view('dashboard.medical_schedules.create',compact('medicalschedule', 'doctor'));
    }

    
    public function store(Request $request)
    {

        //dd($request->get('day'));
        
        //MedicalSchedule::create($request->all());

        $medicalschedule = new MedicalSchedule();
        $medicalschedule->doctor_id       = $request->doctor_id;
        $medicalschedule->day = "0"; //$request->day:
        $medicalschedule->hour_from_1     = $request->hour_from_1;
        $medicalschedule->minutes_from_1  = $request->minutes_from_1;
        $medicalschedule->hour_until_1    = $request->hour_until_1;
        $medicalschedule->minutes_until_1 = $request->minutes_until_1;
        $medicalschedule->hour_from_2     = $request->hour_from_2;
        $medicalschedule->minutes_from_2  = $request->minutes_from_2;
        $medicalschedule->hour_until_2    = $request->hour_until_2;
        $medicalschedule->minutes_until_2 = $request->minutes_until_2;
        $medicalschedule->save();
        return redirect()->route('medical_schedules.index');
    }
   
    public function edit($id)
    {
        $

        $medicalschedule = MedicalSchedulee::find($id);

        //return view('dashboard.diseases.edit',compact('disease','subclassifications'));
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
