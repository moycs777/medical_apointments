<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicalPatientsController extends Controller
{

    public function index()
    {
        return view('dashboard.clinical_patients.index');
    }


    public function create()
    {
        return view('dashboard.clinical_patients.create');
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
