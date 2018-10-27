<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Specialty;

class SpecialtiesController extends Controller
{
    public function index()
    {
        $specialties = Specialty::orderBy('id','DESC')->paginate();

        return view('dashboard.specialties.index',compact('specialties'));
    }

    
    public function create()
    {
        return view('dashboard.specialties.create');
    }

    
    public function store(Request $request)
    {
        $specialty = new Specialty;

        $specialty->name  = $request->get('name');
        $specialty->price = $request->get('price');
        $specialty->save();

        return redirect()->route('specialties.index');
    }

    
    public function edit($id)
    {
        $specialty = Specialty::find($id);

        return view('dashboard.specialties.edit',compact('specialty'));
    }

    
    public function update(Request $request, $id)
    {
        
        $specialty = Specialty::find($id);

        $specialty->name   = $request->get('name');
        $specialty->status = ($request->status == null) ? "0": "1";
        $specialty->price  = $request->get('price');
        $specialty->save();

        return redirect()->route('specialties.index');
    }

    
    public function destroy($id)
    {
        
        Specialty::find($id)->delete();

        return redirect()->route('specialties.index');
    }
}
