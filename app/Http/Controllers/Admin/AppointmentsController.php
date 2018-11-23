<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentStoreRequest;
use App\Http\Requests\AppointmentUpdateRequest;

use Carbon\Carbon;

use App\Appointment;
use App\Doctor;
use App\ClinicalPatient;

class AppointmentsController extends Controller
{
    
    public function index()
    {
        
        $appointments = Appointment::orderBy('id','DESC')->paginate();

        return view('dashboard.appointments.index',compact('appointments'));
    }

  
    public function create()
    {
        $doctors = Doctor::where('status',1)->get();

        $patients = ClinicalPatient::all();

        return view('dashboard.appointments.create',compact('doctors','patients'));
    }

    
    public function store(AppointmentStoreRequest $request)
    {

         if($request->input('doctor_id') == "0"){
            return redirect()->route('appointments.create')
               ->with('info','Debe seleeccionar un doctor');
         }

         $fec_consulta = $request->input('appointment_date');
                   
         $hoy = Carbon::now();
         $hoy1 = $hoy->format("Y/m/d");  // convierto a string


         if (strtotime($fec_consulta) < strtotime($hoy1) ){
            return redirect()->route('appointments.create')
               ->with('info','Fecha de consulta no puede ser menor (<) a la fecha actual');  
         }

         // $fec_cons=strtotime($fec_consulta);
         // $i=$fec_cons;
         // $dia = date('N', $i);
         
        Appointment::create($request->all());
        
        return redirect()->route('appointments.index')
          ->with('info','Informacion actualizada');
    }

    
    public function edit($id)
    {
        $doctors = Doctor::all();
        if (is_null($doctors)){
           return response('Cita no encontrada...', 404);
        }

        $appointment = Appointment::find($id);
        if (is_null($appointment)){
           return response('Cita no encontrada...', 404);
        }
       
        return view('dashboard.appointments.edit',compact('appointment','doctors'));
    }

   
    public function update(AppointmentUpdateRequest $request, $id)
    {
        $appointment = Appointment::find($id);
       
        $appointment->doctor_id           = $request->doctor_id;
        $appointment->clinical_patient_id = $request->clinical_patient_id;
        $appointment->appointment_date    = $request->appointment_date;
        $appointment->reason_consultation = $request->reason_consultation ;
        $appointment->status              = $request->status;
        $appointment->save();

        return redirect()->route('appointments.index')
           ->with('info','Informacion actualizada');

    }

    
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return redirect()->route('appointments.index')
            ->with('info','Informacion eliminada');;
    }
}
