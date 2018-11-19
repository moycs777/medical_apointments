<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Doctor;

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

        return view('dashboard.appointments.create',compact('doctors'));
    }

    
    public function store(Request $request)
    {
        dd($request->all());
        Appointment::create($request->all());

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
