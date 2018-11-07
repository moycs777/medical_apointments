<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MedicalSchedule;
use App\Doctor;

class Medical_SchedulesController extends Controller
{
   
    public function index()
    {

        $medical_schedules = MedicalSchedule::orderBy('id','DESC')->paginate();
        return view('dashboard.medical_schedules.index',compact('medical_schedules'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
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
