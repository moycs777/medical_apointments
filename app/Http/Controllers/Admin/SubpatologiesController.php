<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubpathologyStoreRequest;
use App\Http\Requests\SubpathologyUpdateRequest;

use App\Subpatology;
use App\Pathology;

class SubpatologiesController extends Controller
{
    public function index()
    {
       $subpatologies = Subpatology::orderBy('id','DESC')->paginate();
       
       return view('dashboard.subpatologies.index',compact('subpatologies'));
        
    }

   
    public function create()
    {

       $pathologies = Pathology::all();

       return view('dashboard.subpatologies.create',compact('pathologies'));
    }

    
    public function store(SubpathologyStoreRequest $request)
    {
        Subpatology::create($request->all());

        //return redirect()->route('subpatologies.index');
        return redirect()->route('subpatologies.index')->with('info','Informacion actualizada');
    }

    
    
    public function edit($id)

    {
        $patholies = Pathology::all();

        $subpatology = Subpatology::find($id);
        //dd($subpatology);
        return view('dashboard.subpatologies.edit',compact('subpatology','patholies'));

    }

    public function update(SubpathologyUpdateRequest $request, $id)
    {

        //dd($request->input('pathology_id'));
        $subpatology = Subpatology::find($id);

        $subpatology->pathology_id = $request->pathology_id;
        $subpatology->name = $request->name;
        $subpatology->recipe = $request->recipe;
        $subpatology->prescription = $request->prescription;
        $subpatology->status = ($request->input('status') == null) ? 0 : 1;
        $subpatology->save();

        return redirect()->route('subpatologies.index')->with('info','Informacion actualizada');
        
    }

    
    public function destroy($id)
    {
        Subpatology::find($id)->delete();

        return redirect()->route('subpatologies.index');
    }
}
