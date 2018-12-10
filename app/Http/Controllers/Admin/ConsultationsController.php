<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultationStoreRequest;
use App\Http\Requests\ConsultationUpdateRequest;
use Illuminate\Support\Facades\DB;

use App\Consultation;
use App\Exploration;
use App\Subpatology;
use App\Appointment;
use App\ClinicalPatient;


class ConsultationsController extends Controller
{
    public function Mostrar_Recipe_Prescripcion($id)
    {
        
        //dd($id);
        $subpatology = Subpatology::where('id', $id)->first();
        if ($subpatology == null) {
            return Redirect::back()->withErrors(['Error', 'Subpatologia no registrada']);
        }
       
        return response()->json(
            $subpatology->toArray()
        );
        
    }

    public function Mostrar_Paciente($id)
    {
       
        $appointment = DB::table('appointments')
            ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
            ->select('appointments.id','appointments.reason_consultation',
                     'clinical_patients.first_name', 'clinical_patients.last_name',
                     'clinical_patients.personal_history', 'clinical_patients.family_background')
            ->where('appointments.status','=','pendiente')
            ->where('appointments.id', '=', $id)
            ->get();
      
        return response()->json(
            $appointment->toArray()
        );
    }

    public function index()
    {
        //$consultations = Consultation::orderBy('id','DESC')->paginate();
        $consultations = DB::table('consultations')
           ->orderBy('consultations.id','DESC')
           ->join('appointments', 'consultations.appointment_id', '=', 'appointments.id')
           ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
           ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
           ->select('consultations.id','consultations.date_consultation','consultations.reason_consultation',
                    'clinical_patients.first_name','clinical_patients.last_name',
                    'doctors.first_name AS nomdoctor','doctors.last_name AS apedoctor','consultations.status')
           ->get();

        return view('dashboard.consultations.index', compact('consultations'));
    }

    public function create()
    {
        // Citas pendientes
        
        $appointments = DB::table('appointments')
            ->join('clinical_patients', 'appointments.clinical_patient_id', '=', 'clinical_patients.id')
            ->select('appointments.id','appointments.appointment_date',
                     'clinical_patients.first_name', 'clinical_patients.last_name')
            ->where('status','=','pendiente')
            ->get();
        if ($appointments == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion sobre citas']);
        }

        $explorations = Exploration::where('specialty_id','9')->orderBy('name')->get();
        if ($explorations == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de exploraciones']);
        }
        
        $subpatologies = Subpatology::orderBy('name')->get();;
        if ($subpatologies == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        return view('dashboard.consultations.create',compact('explorations','subpatologies','appointments'));
    }

    
    public function store(Request $request)
    {


        // Elimina retornos de carro y salto de linea
        $recipe = trim($request->recipe);
        $buscar=array(chr(13).chr(10), "\r\n", "\n", "\r");
        $reemplazar=array("", "", "", "");
        $cadena=str_ireplace($buscar,$reemplazar,$recipe);

        $prescription = trim($request->prescription);
        $buscar=array(chr(13).chr(10), "\r\n", "\n", "\r");
        $reemplazar=array("", "", "", "");
        $cadena=str_ireplace($buscar,$reemplazar,$prescription);

        $weight = "00";
        $size = "00";
        $systolic_pressure = "00";
        $diastolic_pressure = "00";
        if(isset($request->weight)) $weight = $request->weight;
        if(isset($request->size))    $weight = $request->size;
        if(isset($request->systolic_pressure))   $systolic_pressure = $request->systolic_pressure;
        if(isset($request->diastolic_pressure))  $diastolic_pressure = $request->diastolic_pressure;
        
        $consultation = new Consultation();
        $consultation->appointment_id        = $request->appointment_id;
        $consultation->exploration_id        = $request->exploration_id;
        $consultation->date_consultation     = $request->date_consultation;
        $consultation->reason_consultation   = $request->reason_consultation;
        $consultation->disease               = ($request->input('disease') == null) ? "A" : $request->disease;
        $consultation->diagnosis             = $request->diagnosis;
        $consultation->recipe                = $recipe;
        $consultation->prescription          = $prescription;
        $consultation->weight                = $weight;
        $consultation->size                  = $size;
        $consultation->systolic_pressure     = $systolic_pressure;
        $consultation->diastolic_pressure    = $diastolic_pressure;
        $consultation->status                = "atendido";
        
        $consultation->save();

        // Actualizar status de la cita del paciente
        $appointment = Appointment::find($request->appointment_id);
        if ($appointment == null) {
            return Redirect::back()->withErrors(['Error', 'informacion no encontrada...']);
        }
        $appointment->status = 'atendido';
        $appointment->save();
        
        return redirect()->route('consultations.index')->with('info','Informacion actualizada');
    }

       
    public function edit($id)
    {
        $consultation = Consultation::find($id);
        if ($consultation == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de consultas']);
        } 

        $appointment = Appointment::find($consultation->appointment_id);
        if ($appointment == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de citas']);
        } 

        $explorations = Exploration::where('specialty_id','9')->orderBy('name')->get();
        if ($explorations == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de exploraciones']);
        } 
        
        $subpatologies = Subpatology::orderBy('name')->get();;
        if ($subpatologies == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        return view('dashboard.consultations.edit',compact('consultation','appointment','explorations','subpatologies'));

    }

    
    public function update(Request $request, $id)
    {

        //dd($request->all());

        $weight = "00";
        $size = "00";
        $systolic_pressure = "00";
        $diastolic_pressure = "00";
        if(isset($request->weight)) $weight = $request->weight;
        if(isset($request->size))    $weight = $request->size;
        if(isset($request->systolic_pressure))   $systolic_pressure = $request->systolic_pressure;
        if(isset($request->diastolic_pressure))  $diastolic_pressure = $request->diastolic_pressure;

        $consultation = new Consultation();
        $consultation->appointment_id        = $request->nrocita;
        $consultation->exploration_id        = $request->exploration_id;
        $consultation->date_consultation     = $request->date_consultation;
        $consultation->reason_consultation   = $request->reason_consultation;
        $consultation->disease               = $request->disease;
        $consultation->diagnosis             = $request->diagnosis;
        $consultation->recipe                = $request->recipe;
        $consultation->prescription          = $request->prescription;
        $consultation->weight                = $weight;
        $consultation->size                  = $size;
        $consultation->systolic_pressure     = $systolic_pressure;
        $consultation->diastolic_pressure    = $diastolic_pressure;
        $consultation->status                = $request->status;
        $consultation->save();

        // Actualizar status de la cita del paciente
        // $appointment = Appointment::find($request->appointment_id);
        // if ($appointment == null) {
        //     return Redirect::back()->withErrors(['Error', 'informacion no encontrada...']);
        // }
        // $appointment->status = 'atendido';
        // $appointment->save();
        
       return redirect()->route('consultations.index')->with('info','Informacion actualizada');
    }

    
    public function destroy($id)
    {
        //
    }
}
