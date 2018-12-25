<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classification;

class ClassificationsController extends Controller
{
    
    public function index()
    {
        $classifications = Classification::orderBy('id','DESC')->paginate();
        return view('dashboard.classifications.index',compact('classifications'));
    }


    public function create()
    {
       return view('dashboard.classifications.create');
    }


    public function store(Request $request)
    {
       Classification::create($request->all());

       //return redirect()->route('classifications.index');

       return redirect()->route('classifications.index')->with('info','Informacion actualizada');
    }

    public function edit($id)
    {
        $classification = Classification::find($id);

        return view('dashboard.classifications.edit',compact('classification'));
    }

    public function update(Request $request, $id)
    {

        $classification = Classification::find($id);
        $classification->codigo = $request->codigo;
        $classification->nombre = $request->nombre;
        $classification->oms = ($request->oms == null) ? "0": "1";
        $classification->particular =($request->particular == null) ? "0": "1";

        $classification->save();

        //$classification->fill($request->all())->save();

        //return redirect()->route('classifications.index');
        return redirect()->route('classifications.index')->with('info','Informacion actualizada');
    }

    public function destroy($id)
    {
        Classification::find($id)->delete();

        return redirect()->route('classifications.index')
           ->with('info','Informacion eliminada...');
    }
}
