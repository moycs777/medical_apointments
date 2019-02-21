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

    public function index()
    {
        $clinicalpatients = ClinicalPatient::orderBy('id','DESC')->paginate();
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

        $weight = "00";
        $size = "00";
        $systolic_pressure = "00";
        $diastolic_pressure = "00";
        if(isset($request->weight))  $weight = $request->weight;
        if(isset($request->size))    $weight = $request->size;
        if(isset($request->systolic_pressure))   $systolic_pressure = $request->systolic_pressure;
        if(isset($request->diastolic_pressure))  $diastolic_pressure = $request->diastolic_pressure;

        $clinicalpatients = new ClinicalPatient();

        $clinicalpatients->user_id            = $user->id;
        $clinicalpatients->insurance_id       = $request->insurance_id; 
        $clinicalpatients->dni                = $request->dni;
        $clinicalpatients->first_name         = $request->first_name;
        $clinicalpatients->last_name          = $request->last_name;
        $clinicalpatients->gender             = $request->input('genero');
        $clinicalpatients->weight             = $weight;
        $clinicalpatients->size               = $size;
        $clinicalpatients->systolic_pressure  = $systolic_pressure;
        $clinicalpatients->diastolic_pressure = $diastolic_pressure;
        $clinicalpatients->personal_history   = 'A';
        $clinicalpatients->family_background  = 'A';
        $clinicalpatients->address            = $request->address;
        $clinicalpatients->bloodtype          = $request->bloodtype;
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
        //dd($request->all());
        $clinicalpatients = ClinicalPatient::find($id);

        $user = $clinicalpatients->user;

        /* $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password =Hash::make('12345678');

        $user->save(); */
       
        $clinicalpatients->dni              = $request->dni;
        $clinicalpatients->insurance_id     = $request->insurance_id;
        $clinicalpatients->last_name        = $request->last_name;
        $clinicalpatients->gender           = $request->input('genero');
        $clinicalpatients->address          = $request->address;
        $clinicalpatients->bloodtype        = $request->bloodtype;
        //$clinicalpatients->status           = 1;

        $clinicalpatients->save();

        //return redirect()->route('clinicalpatients.index');
        return redirect()->route('clinicalpatients.index')->with('info','Informacion actualizada');
    }


    public function destroy($id)
    {
        //dd($id);
        $clinicalpatients = ClinicalPatient::find($id);
        $user = $clinicalpatients->user;

        $clinicalpatients->delete();
        //se debe eliminar tambien el ususario de logueo
        $user->delete();

        return redirect()->route('clinicalpatients.index');
    }
}
