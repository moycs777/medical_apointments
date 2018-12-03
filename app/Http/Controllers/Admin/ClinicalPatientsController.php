<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\ClinicalPatientsRequest;

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
        $insurances = Insurance::orderBy('name')->get();
        return view('dashboard.clinical_patients.create',compact('insurances'));
    }


    public function store(ClinicalPatientsRequest $request)
    {
        // dd($request->all());
        $user = new User();
        $user->name = $request->first_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make('12345678');

        $user->save();

        $clinicalpatients = new ClinicalPatient();

        $clinicalpatients->user_id           = $user->id;
        $clinicalpatients->insurance_id      = $request->insurance_id;
        $clinicalpatients->dni               = $request->dni;
        $clinicalpatients->first_name        = $request->first_name;
        $clinicalpatients->last_name         = $request->last_name;
        $clinicalpatients->gender            = $request->input('genero');
        $clinicalpatients->personal_history  = 'A';
        $clinicalpatients->family_background = 'A';
        $clinicalpatients->address           = $request->address;
        $clinicalpatients->bloodtype         = $request->bloodtype;
        $clinicalpatients->save();

        return redirect()->route('clinicalpatients.index');
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


    public function update(Request $request, $id)
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

        return redirect()->route('clinicalpatients.index');
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
