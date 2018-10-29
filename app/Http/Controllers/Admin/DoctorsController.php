<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;

class DoctorsController extends Controller
{
    
    public function index()
    {
        $doctors = Doctor::orderBy('id','DESC')->paginate();

        return view('dashboard.doctors.index',compact('doctors'));
    }

    
    public function create()
    {
        return view('dashboard.doctors.create');
    }

   
    public function store(Request $request)
    {

        Doctor::create($request->all());

        return redirect()->route('doctors.index');
    }

    
    public function edit($id)
    {
        $doctor = Doctor::find($id);

        return view('dashboard.doctors.edit',compact('doctor'));
    }

    
    public function update(Request $request, $id)
    {
        dd($request->all());
        $doctor = Doctor::find($id);

        $doctor->identification_card = $request->identification_card;
        $doctor->first_name = $request->first_name;
        $doctor->last_name  = $request->last_name;
        $doctor->gender     = ($request->gender == 'M') ? 'M' : 'F';
        $doctor->address    = $request->address;
        $doctor->home_phone = $request->home_phone;
        $doctor->work_phone = $request->work_phone;
        $doctor->mobile_1   = $request->mobile_1;
        $doctor->mobile_2   = $request->mobile_2;
        $doctor->email      = $request->email;
        $doctor->beeper     = $request->beeper;
        $doctor->status     = isset($request->status) ? 1 : 0;

        $doctor->save();

        return redirect()->route('doctors.index');

    }

    
    public function destroy($id)
    {
        Doctor::find($id)->delete();

        return redirect()->route('doctors.index');
    }
}
