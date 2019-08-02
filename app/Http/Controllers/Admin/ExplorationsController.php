<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Exploration;
use App\Specialty;


class ExplorationsController extends Controller
{
    
    public function index()
    {
        $explorations = Exploration::where('specialty_id','10')->orderBy('specialty_id')->paginate();

        return view('dashboard.explorations.index',compact('explorations'));
    }

    
    public function create()
    {
        
        $specialties  = Specialty::where('status','=',1)->get();

        $exploration = Exploration::all();
        
        return view('dashboard.explorations.create',compact('specialties','exploration'));
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
           //return response('Especialidades no encontradas...', 404)
           return redirect()->route('explorations.index')
                            ->withErrors(['Error', 'Especialidades no encontradas']);
        
        //dd($specialties);    
        $exploration = Exploration::find($id);
        if (is_null( $exploration))
           //return response('Informacion no encontrada', 404);
           return redirect()->route('explorations.index')
                            ->withErrors(['Error', 'Exploracion no encontrada']);

        return view('dashboard.explorations.edit',compact('exploration','specialties'));
    }

    public function update(Request $request, $id)
    {
        $exploration = Exploration::find($id);

        $exploration->specialty_id = $request->specialty_id;
        $exploration->name         = $request->name;
        $exploration->de           = 'D';
        $exploration->status       = ($request->input('status') == null) ? 0 : 1;
        $exploration->save();

        return redirect()->route('explorations.index')->with('info','Informacion actualizada');

    }

    public function destroy($id)
    {
        $consulta_exploracion = DB::table('consultation_explorations')->where('consultation_id', $id)->first();

        if($consulta_exploracion != null){
            return redirect()->route('explorations.index')->with('info','Existen registros vinculados, no puede eliminarse (Consulta-Exploracion)');
        }

        Exploration::find($id)->delete();

        return redirect()->route('explorations.index')->with('info','Informacion eliminada...');
    }
}
