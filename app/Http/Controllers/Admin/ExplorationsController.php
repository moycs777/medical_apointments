<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exploration;
use App\Specialty;

class ExplorationsController extends Controller
{
    
    public function index()
    {
        $explorations = Exploration::orderBy('id','DESC')->paginate();

        return view('dashboard.explorations.index',compact('explorations'));
    }

    
    public function create()
    {
        
        $specialties  = Specialty::where('status','=',1)->get();

        $exploration = Exploration::all();
        //dd($specialties);
        return view('dashboard.explorations.create',compact('exploration','specialties'));
    }

    public function store(Request $request)
    {
         Exploration::create($request->all());

         return redirect()->route('explorations.index')
            ->with('info','Transaccion exitosa...');
    }

    public function edit($id)
    {
        
        $specialties  = Specialty::where('status','=',1)->get(); 
        if (is_null($specialties))
           return response('Especialidades no encontradas...', 404);
        
        //dd($specialties);    
        $exploration = Exploration::find($id);
        if (is_null( $exploration))
           return response('Informacion no encontrada', 404);

        return view('dashboard.explorations.edit',compact('exploration','specialties'));
    }

    public function update(Request $request, $id)
    {
        $exploration = Exploration::find($id);

        $exploration->specialty_id = $request->specialty_id;
        $exploration->name         = $request->name;
        $exploration->de           = $request->de;
        $exploration->status       = ($request->input('status') == null) ? 0 : 1;
        $exploration->save();

        return redirect()->route('explorations.index');
    }

    public function destroy($id)
    {
        //
    }
}
