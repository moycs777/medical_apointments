<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Doctor;
use Bitfumes\Multiauth\Model\Admin;

class DoctorProfileController extends Controller
{
    public function index()
    {
        $doctor = Doctor::where('admin_id', Auth::user()->id)->first();

        return view('dashboard.doctorprofile.index',compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctor::where('admin_id', $id)->first();

        return view('dashboard.doctorprofile.edit',compact('doctor'));
    }
}
