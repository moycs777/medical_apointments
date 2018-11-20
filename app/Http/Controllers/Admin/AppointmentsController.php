<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $doctors = Doctor::all();

        $patients = ClinicalPatient::where('status',1)->get();

        return view('dashboard.appointments.create',compact('doctors','patients'));
    }

    
    public function store(Request $request)
    {

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
        // $appointment = new Appointment();

        // $appointment->patient_id          =  $request->patient_id;
        // $appointment->doctor_id           =  $request->doctor_id;
        // $appointment->appointment_date    =  $request->appointment_date;
        // $appointment->reason_consultation =  $request->reason_consultation;
        // $appointment->day                 =  $dia;

        return redirect()->route('appointments.index');
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
