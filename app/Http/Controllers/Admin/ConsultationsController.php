<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Consultation;

class ConsultationsController extends Controller
{
    
    public function index()
    {
        $consultations = Consultation::orderBy('id','DESC')->paginate();
        return view('dashboard.consultations.index', compact('consultations'));
    }

    public function create()
    {
        return view('dashboard.consultations.create');
    }

    
    public function store(Request $request)
    {
        dd($request->all());
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