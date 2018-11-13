<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medical_SchedulesStoreRequest;
use App\Http\Requests\Medical_SchedulesUpdateRequest;

use Illuminate\Support\Facades\DB;
use Auth;

use App\MedicalSchedule;
use App\Doctor;

class Medical_SchedulesController extends Controller
{
   
    public function index()
    {
       
        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();
        $medical_schedules = MedicalSchedule::where('doctor_id', $doctor->id)
            ->orderBy('id','ASC')
            ->paginate();

        return view('dashboard.medical_schedules.index',compact('medical_schedules','nroreg'));
    }

    
    public function create()
    {
        $nroreg = DB::table('medical_schedules')->count();
        if($nroreg == 7) return;
        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();
        $medicalschedule = DB::table('medical_schedules')
            ->where('doctor_id', $doctor->id)
            ->count();

        return view('dashboard.medical_schedules.create',compact('medicalschedule', 'doctor'));
    }

    
    public function store(Medical_SchedulesStoreRequest $request)
    {

        //dd($request->all());
        $medicalschedule = new MedicalSchedule();
        $medicalschedule->doctor_id       = $request->doctor_id;
        $medicalschedule->day             = $request->dia;
        $medicalschedule->hour_from_1     = $request->hour_from_1;
        $medicalschedule->minutes_from_1  = $request->minutes_from_1;
        $medicalschedule->hour_until_1    = $request->hour_until_1;
        $medicalschedule->minutes_until_1 = $request->minutes_until_1;
        $medicalschedule->hour_from_2     = $request->hour_from_2;
        $medicalschedule->minutes_from_2  = $request->minutes_from_2;
        $medicalschedule->hour_until_2    = $request->hour_until_2;
        $medicalschedule->minutes_until_2 = $request->minutes_until_2;
        $medicalschedule->status_1        = ($request->status_1 == null) ? "0" : "1";
        $medicalschedule->status_2        = ($request->status_2 == null) ? "0" : "1";
        $medicalschedule->save();
        return redirect()->route('medical_schedules.index');
    }
   
    public function edit($id)
    {
        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();
        $medicalschedule = MedicalSchedule::find($id);

        return view('dashboard.medical_schedules.edit',compact('medicalschedule', 'doctor'));
    }

   
    public function update(Medical_SchedulesUpdateRequest $request, $id)
    {
        $medicalschedule = MedicalSchedule::find($id);

        $medicalschedule->day             = $request->dia;
        $medicalschedule->hour_from_1     = $request->hour_from_1;
        $medicalschedule->minutes_from_1  = $request->minutes_from_1;
        $medicalschedule->hour_until_1    = $request->hour_until_1;
        $medicalschedule->minutes_until_1 = $request->minutes_until_1;
        $medicalschedule->hour_from_2     = $request->hour_from_2;
        $medicalschedule->minutes_from_2  = $request->minutes_from_2;
        $medicalschedule->hour_until_2    = $request->hour_until_2;
        $medicalschedule->minutes_until_2 = $request->minutes_until_2;
        $medicalschedule->status_1        = ($request->status_1 == null) ? "0" : "1";
        $medicalschedule->status_2        = ($request->status_2 == null) ? "0" : "1";
        $medicalschedule->save();

        return redirect()->route('medical_schedules.index');
    }

    
    public function destroy($id)
    {
        //
    }
}
