<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Insurance;

class InsurancesController extends Controller
{

    public function index()
    {
         $insurances = Insurance::orderBy('id','DESC')->paginate();

         return view('dashboard.medical_insurance.index',compact('insurances'));
    }


    public function create()
    {
       return view('dashboard.medical_insurance.create');
    }


    public function store(Request $request)
    {
        Insurance::create($request->all());

        return redirect()->route('insurances.index');
    }


    public function edit($id)
    {
        $insurance = Insurance::find($id);

        return view('dashboard.medical_insurance.edit',compact('insurance'));
    }


    public function update(Request $request, $id)
    {

        $insurance = Insurance::find($id);

        $insurance->fill($request->all())->save();

        return redirect()->route('insurances.index');
    }


    public function destroy($id)
    {
        Insurance::find($id)->delete();

        return redirect()->route('insurances.index');
    }
}
