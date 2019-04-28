<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentStoreRequest;
use App\Http\Requests\AppointmentUpdateRequest;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Appointment;
use App\Doctor;
use App\ClinicalPatient;
use App\Specialty;
use App\DoctorSpecialty;
use App\Insurance;

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
        
        if(count($doctors) == 0){
           return redirect()->route('appointments.index')->withErrors(['Error', 'Informacion sobre doctores no registrada']);
        }
        
        $patients = ClinicalPatient::all();
        if($patients == null){
           return redirec()->route('appointments.index')
                           ->withErrors(['Error', 'Informacion sobre pacientes no registrada']);
        }

        $doctorspecialty = DB::table('doctor_specialty')
            ->join('doctors', 'doctor_specialty.doctor_id', '=', 'doctors.id')
            ->join('specialties', 'doctor_specialty.specialty_id', '=', 'specialties.id')
            ->select('doctor_specialty.id','specialties.name')
            ->where('doctors.status','=',true)
            ->get();

        if (count($doctorspecialty) == 0){
           return redirect()
                  ->route('appointments.index')
                  ->withErrors(['Error(es)', 'Especialidad del doctor no registrada']);
        }

        $insurances = Insurance::all();
        if($insurances == null){
           return redirect()->route('appointments.index')
                            ->withErrors(['Error', 'Informacion sobre seguros no registrada']);
        }

        return view('dashboard.appointments.create',compact('doctors','patients','doctorspecialty','insurances'));
        
    }

    
    public function store(AppointmentStoreRequest $request)
    {

         if($request->input('doctor_id') == "0") {
            return redirect()->route('appointments.create')->withErrors(['Debe seleccionar un doctor']);
         }

         if($request->input('insurance_id') == "0") {
            return redirect()->route('appointments.create')->withErrors(['Debe seleccionar un Seguro Medico']);
         }

         $fec_consulta = $request->input('appointment_date');
                   
         $hoy = Carbon::now();
         $hoy1 = $hoy->format("Y/m/d");  // convierto a string


         if (strtotime($fec_consulta) < strtotime($hoy1) ){
            return redirect()->route('appointments.create')
               ->withErrors(['Fecha de consulta no puede ser menor (<) a la fecha actual']);  
         }

         // $fec_cons=strtotime($fec_consulta);
         // $i=$fec_cons;
         // $dia = date('N', $i);

        Appointment::create($request->all());
        
        return redirect()->route('appointments.index')->with('info','Informacion actualizada');
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

        $doctorspecialty = DB::table('appointments')
            ->join('doctor_specialty', 'appointments.doctor_id', '=', 'doctor_specialty.doctor_id')
            ->join('specialties', 'doctor_specialty.specialty_id', '=', 'specialties.id')
            ->select('doctor_specialty.id','specialties.name')
            ->where('appointments.id','=',$id)
            ->get();

        if($doctorspecialty == null){
           return Redirect()->route('appointments.index')
                            ->withErrors(['Error', 'Informacion sobre especialidades de doctores no registrada']);
        }
        
        $insurances = Insurance::all();
        if($insurances == null){
           return redirect()->route('appointments.index')
                            ->withErrors(['Error', 'Informacion sobre seguros no registrada']);
        }

        return view('dashboard.appointments.edit',compact('appointment','doctors','doctorspecialty','insurances'));
    }

   
    public function update(AppointmentUpdateRequest $request, $id)
    {

        // dd($request->all());
        $appointment = Appointment::find($id);
       
        // $appointment->doctor_id            = $request->doctor_id;
        // $appointment->clinical_patient_id  = $request->clinical_patient_id;
        // $appointment->doctor_specialty_id  = $request->doctor_specialty_id;
        // $appointment->insurance_id         = $request->insurance_id;
        // $appointment->appointment_date     = $request->appointment_date;
        // $appointment->reason_consultation  = $request->reason_consultation ;
        // $appointment->status               = $request->status;
        //$appointment->save();
        $appointment->fill($request->all())->save();

        return redirect()->route('appointments.index')->with('info','Informacion actualizada');

    }

    
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return redirect()->route('appointments.index')
            ->with('info','Informacion eliminada');;
    }
}
