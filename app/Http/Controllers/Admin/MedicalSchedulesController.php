<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MedicalSchedule;
use App\Doctor;
class MedicalSchedulesController extends Controller
{
    
    public function index()
    {
        
        $medicalschedules = MedicalSchedule::orderBy('id','DESC')->paginate();
        //return view('dashboard.medical_schedules.index',compact('medicalschedules'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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
