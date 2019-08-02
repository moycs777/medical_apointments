<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ClinicalPatientsRequest;
use App\Http\Requests\ClinicalPatientsUpdateRequest;

use App\ClinicalPatient;
use App\User;
use App\Insurance;

class ClinicalPatientsController extends Controller
{

    public function index(Request $request)
    {
        $dni        = $request->get('dni');
        $first_name = $request->get('first_name');
        $last_name  =  $request->get('last_name');

        $clinicalpatients = ClinicalPatient::orderBy('id','DESC')
            ->dni($dni)
            ->first_name($first_name)
            ->last_name($last_name)
            ->paginate(8);

        //$clinicalpatients = ClinicalPatient::orderBy('id','DESC')->paginate();
        return view('dashboard.clinical_patients.index', compact('clinicalpatients'));
    }


    public function create()
    {
        // $users = DB::table('users')
        //         ->whereNotIn('id', DB::table('clinical_patients')->pluck('user_id'))
        //         ->select('id','username')
        //         ->groupBy('id','username')
        //         ->get();

        $insurances = Insurance::orderBy('name')->get();
        return view('dashboard.clinical_patients.create',compact('insurances'));
    }


    public function store(ClinicalPatientsRequest $request)
    {
        // Validar si username ya existe*****
        //dd($request->all());
        $buscarUser = User::where('username',$request->username)->first();
        if($buscarUser != null){
           return back()->withInput()->withErrors(['field_name' => ['Username ya esta registrado.']]);
        }
        //***********************************
        $user = new User();
        $user->name = $request->first_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make('12345678');

        $user->save();

        $clinicalpatients = new ClinicalPatient();

        $clinicalpatients->user_id            = $user->id;
        $clinicalpatients->insurance_id       = $request->insurance_id; 
        $clinicalpatients->dni                = $request->dni;
        $clinicalpatients->first_name         = $request->first_name;
        $clinicalpatients->last_name          = $request->last_name;
        $clinicalpatients->gender             = $request->input('genero');
        $clinicalpatients->weight             = $request->weight;
        $clinicalpatients->size               = $request->size;
        $clinicalpatients->systolic_pressure  = $request->systolic_pressure;
        $clinicalpatients->diastolic_pressure = $request->diastolic_pressure;
        $clinicalpatients->personal_history   = $request->personal_history;
        $clinicalpatients->family_background  = $request->family_background;
        $clinicalpatients->address            = $request->address;
        $clinicalpatients->bloodtype          = $request->bloodtype;
        $clinicalpatients->phone_1            = $request->phone_1;
        $clinicalpatients->phone_2            = $request->phone_2;

        $clinicalpatients->save();

        //return redirect()->route('clinicalpatients.index');
        return redirect()->route('clinicalpatients.index')->with('info','Informacion actualizada');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $insurances = Insurance::orderBy('name')->get();

        $clinicalpatient = ClinicalPatient::find($id);
        
        return view('dashboard.clinical_patients.edit',compact('clinicalpatient','insurances'));
    }


    public function update(ClinicalPatientsUpdateRequest $request, $id)
    {
        $clinicalpatients = ClinicalPatient::find($id);
       
        $user = $clinicalpatients->user;

        $clinicalpatients->insurance_id       = $request->insurance_id; 
        $clinicalpatients->dni                = $request->dni;
        $clinicalpatients->first_name         = $request->first_name;
        $clinicalpatients->last_name          = $request->last_name;
        $clinicalpatients->gender             = $request->input('genero');
        $clinicalpatients->weight             = $request->weight;
        $clinicalpatients->size               = $request->size;
        $clinicalpatients->systolic_pressure  = $request->systolic_pressure;
        $clinicalpatients->diastolic_pressure = $request->diastolic_pressure;
        $clinicalpatients->personal_history   = $request->personal_history;
        $clinicalpatients->family_background  = $request->family_background;
        $clinicalpatients->address            = $request->address;
        $clinicalpatients->bloodtype          = $request->bloodtype;
        $clinicalpatients->phone_1            = $request->phone_1;
        $clinicalpatients->phone_2            = $request->phone_2;

        $clinicalpatients->save();

        //return redirect()->route('clinicalpatients.index');
        return redirect()->route('clinicalpatients.index')->with('info','Informacion actualizada');
    }


    public function destroy($id)
    {
        $clinicalpatients = ClinicalPatient::find($id);
        $user = $clinicalpatients->user;

        $clinicalpatients->delete();
        //se debe eliminar tambien el ususario de logueo
        $user->delete();

        return redirect()->route('clinicalpatients.index');
    }

    
    
}
