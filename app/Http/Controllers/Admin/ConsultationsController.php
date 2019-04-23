<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultationStoreRequest;
use App\Http\Requests\ConsultationUpdateRequest;
use Illuminate\Support\Facades\DB;

use App\Consultation;
use App\Exploration;
use App\Subpatology;
use App\Appointment;
use App\ClinicalPatient;
use App\Disease;


class ConsultationsController extends Controller
{
    public function Mostrar_Recipe_Prescripcion($id)
    {
        
        $subpatology = Subpatology::where('id', $id)->first();
        if ($subpatology == null) {
            return redirect()->route('consultations.index')
                             ->withErrors(['Error', 'Subpatologia no registrada']);
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
             ->where('appointments.id', '=', $id)
             ->Where('appointments.status','=','confirmado')
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
            ->Where('status','=','confirmado')
            ->get();

        if ($appointments == null) {
            return redirect()->route('consultations.index')->withErrors(['Error', 'No existe informacion sobre citas']);
        }

        // $explorations = Exploration::where('specialty_id','9')
        //                 ->orderBy('name')
        //                 ->get();

        // if ($explorations == null) {
        //     return redirect()->route('consultations.index')->withErrors(['Error', 'No existe informacion de exploraciones']);
        // }
        
        $subpatologies = Subpatology::orderBy('name')->get();
        if ($subpatologies == null) {
            return redirect()->route('consultations.index')->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        $diseases = Disease::select('id', 'name')
                       ->where('subclassification_id','230')
                       ->get();
                       
        //dd($diseases);
        if(count($diseases) <= 0){
          return Redirect()->route('consultations.index')->withErrors(['Error', 'Enfermedades no registradas']);
        }
        

        return view('dashboard.consultations.create',compact('subpatologies','appointments','diseases'));
    }

    
    public function store(ConsultationStoreRequest $request)
    {
        // dd($request->all());
        // Elimina retornos de carro y salto de linea
        $recipe = trim($request->recipe);
        $buscar=array(chr(13).chr(10), "\r\n", "\n", "\r");
        $reemplazar=array("", "", "", "");
        $cadena=str_ireplace($buscar,$reemplazar,$recipe);

        $prescription = trim($request->prescription);
        $buscar=array(chr(13).chr(10), "\r\n", "\n", "\r");
        $reemplazar=array("", "", "", "");
        $cadena=str_ireplace($buscar,$reemplazar,$prescription);

        $consultation = new Consultation();
        $consultation->appointment_id        = $request->appointment_id;
        $consultation->exploration_id        = 3; //$request->exploration_id;
        $consultation->subpatology_id        = $request->subpatology_id;
        $consultation->disease_id            = $request->disease_id ;
        $consultation->date_consultation     = $request->date_consultation;
        $consultation->reason_consultation   = $request->reason_consultation;
        $consultation->current_illness       = $request->current_illness;
        $consultation->weight                = $request->weight;
        $consultation->size                  = $request->size;
        $consultation->systolic_pressure     = $request->systolic_pressure;
        $consultation->diastolic_pressure    = $request->diastolic_pressure;
        $consultation->status                = "atendido";
        
        $consultation->save();

        //**** Actualizar status de la cita del paciente***
        $appointment = Appointment::find($request->appointment_id);
        if ($appointment == null) {
            return redirect()->route('consultations.index')->withErrors(['Error', 'informacion no encontrada...']);
        }
        $appointment->status = 'atendido';
        $appointment->save();
        //**************************************************

        //Actualizar recipe e indicaciones
        $subpatology = Subpatology::find($request->subpatology_id);
        if ($subpatology == null) {
            return redirect()->route('consultations.index')
                             ->withErrors(['Error', 'Subpatologia no sera actualizada...']);
        }
        $subpatology->recipe       = $request->recipe;
        $subpatology->prescription = $request->prescription;
        $subpatology->save();
        //***************************************************

        return redirect()->route('consultations.index')->with('info','Informacion actualizada');
    }

       
    public function edit($id)
    {
        $consultation = Consultation::find($id);


        if ($consultation == null) {
            return redirect()->route('consultations.index')
                             ->withErrors(['Error', 'No existe informacion de consultas']);
        } 

        $appointment = Appointment::find($consultation->appointment_id);
        if ($appointment == null) {
            return redirect()->route('consultations.index')
                            ->withErrors(['Error', 'No existe informacion de citas']);
        } 

        // $explorations = Exploration::where('specialty_id','9')->orderBy('name')->get();
        // if ($explorations == null) {
        //     return redirect()->route('consultations.index')
        //                      ->withErrors(['Error', 'No existe informacion de exploraciones']);
        // } 
        
        $subpatologies = Subpatology::orderBy('name')->get();
        if ($subpatologies == null) {
            return redirect()->route('consultations.index')
                            ->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        $diseases = Disease::where('subclassification_id','230')->get();
        if($diseases == null){
          return redirect()->route('consultations.index')
                            ->withErrors(['Error', 'Enfermedades no registradas']);
        }
        
        return view('dashboard.consultations.edit',compact('consultation','appointment','subpatologies','diseases'));

    }

    
    public function update(ConsultationUpdateRequest $request, $id)
    {
        
        //dd($request->all());       
        DB::beginTransaction();
        
        try{
 
            $consultation = Consultation::find($id);
            
            $consultation->appointment_id        = $request->nrocita;
            $consultation->exploration_id        = 3; //$request->exploration_id;
            $consultation->subpatology_id        = $request->subpatology_id;
            $consultation->disease_id            = $request->disease_id;
            $consultation->date_consultation     = $request->date_consultation;
            $consultation->reason_consultation   = $request->reason_consultation;
            $consultation->current_illness       = $request->current_illness;
            $consultation->weight                = $request->weight;
            $consultation->size                  = $request->size;
            $consultation->systolic_pressure     = $request->systolic_pressure;
            $consultation->diastolic_pressure    = $request->diastolic_pressure;
            $consultation->status                = $request->status;
            $consultation->save();

           //*** Actualizamos ClinicalPatient
           $clinicalpatient = ClinicalPatient::find($request->codigo_paciente);
           if($clinicalpatient == null){
              DB::rollback();
              return Redirect::back()->withErrors(['Error', 'Transaccion cancelada...']);
           }

           if($request->personal_history != null) {
             $clinicalpatient->personal_history   = $request->personal_history;
           }

           if( $request->family_background != null) {
               $clinicalpatient->family_background  = $request->family_background;
           }

           $clinicalpatient->save();

          
           //Actualizar recipe e indicaciones
           $subpatology = Subpatology::find($request->subpatology_id);
           if ($subpatology == null) {
               return Redirect::back()->withErrors(['Error', 'Subpatologia no sera actualizada...']);
           }
           $subpatology->recipe       = $request->recipe;
           $subpatology->prescription = $request->prescription;
           $subpatology->save();
           
           DB::commit(); 

           return redirect()->route('consultations.index')->with('info','Informacion actualizada');

        } catch (\Exception $e){

            DB::rollback();

            throw $e;
            return Redirect::back()->withErrors(['Error', 'Transaccion cancelada...']);
        }
    }

    
    public function destroy($id)
    {
        //
    }

    
}
