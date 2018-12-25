<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pathology;
use App\Classification;

class PathologiesController extends Controller
{
    
    public function index()
    {
        $pathologies = Pathology::orderBy('id','DESC')->paginate();

        return view('dashboard.pathologies.index',compact('pathologies'));
        
    }

    
    public function create()
    {
        
        $classifications = Classification::all();

        return view('dashboard.pathologies.create',compact('classifications'));
    }

   
    public function store(Request $request)
    {

        Pathology::create($request->all());

        //return redirect()->route('pathologies.index');
        return redirect()->route('pathologies.index')->with('info','Informacion actualizada');
    }

    
    public function edit($id)
    {
        
        $classifications = Classification::all();

        $pathology = Pathology::find($id);

        return view('dashboard.pathologies.edit',compact('pathology','classifications'));
        
    }

    
    public function update(Request $request, $id)
    {

        $pathology = Pathology::find($id);

        $pathology->classification_id = $request->classification_id;
        $pathology->name = $request->name;
        $pathology->status = ($request->input('status') == null) ? 0 : 1;
        $pathology->save();
        
        return redirect()->route('pathologies.index')->with('info','Informacion actualizada');
    }

    
    public function destroy($id)
    {
        Pathology::find($id)->delete();

        return redirect()->route('pathologies.index');
    }
}
