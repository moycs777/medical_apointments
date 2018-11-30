<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Consultation;
use App\Exploration;
use App\Subpatology;

class ConsultationsController extends Controller
{
    public function Mostrar_Recipe_Prescripcion($id)
    {
        
        //dd($id);
        $subpatology = Subpatology::where('id', $id)->first();
        if ($subpatology == null) {
            return Redirect::back()->withErrors(['Error', 'Subpatologia no registrada']);
        }
       
        return response()->json(
            $subpatology->toArray()
        );
        
    }

    public function index()
    {
        $consultations = Consultation::orderBy('id','DESC')->paginate();
        return view('dashboard.consultations.index', compact('consultations'));
    }

    public function create()
    {
        $explorations = Exploration::where('specialty_id','9')->orderBy('name')->get();
        if ($explorations == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de exploraciones']);
        }

        $subpatologies = Subpatology::orderBy('name')->get();;
        if ($subpatologies == null) {
            return Redirect::back()->withErrors(['Error', 'No existe informacion de subpatologias']);
        }

        return view('dashboard.consultations.create',compact('explorations','subpatologies'));
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
