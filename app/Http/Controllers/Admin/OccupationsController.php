<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\RequestsOcupationStoreRequest;
use App\Http\RequestsOcupationUpdateRequest;
use App\Occupation;

class OccupationsController extends Controller
{
    
    public function index()
    {
        $occupations = Occupation::orderBy('id','DESC')->paginate();

        return view('dashboard.occupations.index',compact('occupations'));
    }

   
    public function create()
    {
        return view('dashboard.occupations.create');
    }

    
    public function store(OcupationStoreRequest $request)
    {
        Occupation::create($request->all());

        //return redirect()->route('occupations.index'); 

        return redirect()->route('occupations.index')->with('info','Informacion actualizada');
    }

   
    public function edit($id)
    {
        $occupation = Occupation::find($id);

        return view('dashboard.occupations.edit',compact('occupation'));

    }

    
    public function update(OcupationUpdateRequest $request, $id)
    {
        $occupations = Occupation::find($id);

        $occupations->fill($request->all())->save();

        return redirect()->route('occupations.index')->with('info','Informacion actualizada');
    }

    public function destroy($id)
    {

        Occupation::find($id)->delete();

        return redirect()->route('occupations.index');
    }
}
