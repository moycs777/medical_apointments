<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medical_SchedulesStoreRequest;
use App\Http\Requests\Medical_SchedulesUpdateRequest;

use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Input;

use App\MedicalSchedule;
use App\Doctor;

class MedicalSchedulesController extends Controller
{
   
    public function listarHorarioMedico($id)
    {
        
        
        $doctor = Doctor::where('id', $id)->first();
        if ($doctor == null) {
            return response()->json( null );
        }
        //return response()->json(            $doctor->id        );

        $medical_schedules = MedicalSchedule::where('doctor_id', $doctor->id)
            ->orderBy('id','ASC')
            ->get();
        //return response()->json( $medical_schedules  );

        return response()->json(
            $medical_schedules->toArray()
        );
        
    }

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


        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();

        $medicalschedule = DB::table('medical_schedules')
            ->where('doctor_id', $doctor->id)
            ->count();

        if($medicalschedule == 7) return redirect()->route('medical_schedules.index')
            ->with('info','El horario ya fue configurado, utilize el boton Editar...');

        return view('dashboard.medical_schedules.create',compact('medicalschedule', 'doctor'));
    }

    
    public function store(Medical_SchedulesStoreRequest $request)
    {

        if (intval($request->hour_from_1) > 0 && intval($request->hour_until_1)  == 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora final');
        }

        if (intval($request->hour_from_1) == 0 && intval($request->hour_until_1)  > 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora inicial');
        }

        if (intval($request->hour_from_2) > 0 && intval($request->hour_until_2)  == 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora final');
        }

        if (intval($request->hour_from_2) == 0 && intval($request->hour_until_2)  > 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora inicial');
        }

        $medicalschedule = new MedicalSchedule();
        $medicalschedule->doctor_id       = $request->doctor_id;
        $medicalschedule->day             = $request->day;
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
        
        
        if (intval($request->hour_from_1) > 0 && intval($request->hour_until_1)  == 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora final');
        }

        if (intval($request->hour_from_1) == 0 && intval($request->hour_until_1)  > 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora inicial');
        }

        if (intval($request->hour_from_2) > 0 && intval($request->hour_until_2)  == 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora final');
        }

        if (intval($request->hour_from_2) == 0 && intval($request->hour_until_2)  > 0){
           return Redirect::back()->withInput(Input::all())
                ->with('info','Debe de completar el turno, falta la hora inicial');
        }

        $medicalschedule = MedicalSchedule::find($id);

        $medicalschedule->doctor_id       = $request->doctor_id;
        $medicalschedule->day             = $request->day;
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
