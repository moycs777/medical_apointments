<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

use App\Http\Requests\ClinicalPatientsRequest;

use App\ClinicalPatient;
use App\User;
use App\Insurance;

class ProfileController extends Controller
{
    
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $insurances = Insurance::orderBy('name')->get();

        return view('profile.index', compact('user', 'insurances'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
        $user = User::find(Auth::user()->id);
        
        $clinicalpatients = $user->clinical_patient;

        $user->name = $request->name;
        //$user->username = $request->username;
        //$user->email = $request->email;
        //$user->password = Hash::make('12345678');

        $user->save();
        
        $clinicalpatients->dni              = $request->dni;
        $clinicalpatients->insurance_id     = $request->insurance_id;
        $clinicalpatients->last_name        = $request->last_name;
        //$clinicalpatients->gender           = $request->input('genero');
        $clinicalpatients->address          = $request->address;
        $clinicalpatients->bloodtype        = $request->bloodtype;

        $clinicalpatients->save();

        return redirect()->route('profile.index');
    }

    
    public function show($id)
    {
        //
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
