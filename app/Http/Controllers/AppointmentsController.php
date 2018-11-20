<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;
use App\Doctor;


class AppointmentsController extends Controller
{
    
    public function index()
    {
        $appointments = Appointment::orderBy('id','DESC')->paginate();

        return view('appointments.index', compact('appointments'));
    }

    
    public function create()
    {
        $doctors = Doctor::all();

        return view('appointments.create',compact('doctors'));
    }

    
    public function store(Request $request)
    {
        dd($request->all());
        Appointment::create($request->all());

        return redirect()->route('appoints.index');
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
