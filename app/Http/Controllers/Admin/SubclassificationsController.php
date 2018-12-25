<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Classification;
use App\Subclassification;

class SubclassificationsController extends Controller
{

    public function index()
    {

        $subclassifications = Subclassification::orderby('id','DESC')->paginate();

        return view('dashboard.subclassifications.index',compact('subclassifications'));
    }

    public function create()
    {
        $classifications = Classification::all();

        return view('dashboard.subclassifications.create',compact('classifications'));
    }

    public function store(Request $request)
    {
        Subclassification::create($request->all());

        //return redirect()->route('subclassifications.index');

        return redirect()->route('subclassifications.index')->with('info','Informacion actualizada');
    }


    public function edit($id)
    {

        $classifications = Classification::all();

        $subclassification = Subclassification::find($id);

        return view('dashboard.subclassifications.edit',compact('subclassification','classifications'));
    }


    public function update(Request $request, $id)
    {
        //dd($request->all());
        $subclassification = Subclassification::find($id);

        $subclassification->fill($request->all())->save();

        //return redirect()->route('subclassifications.index');
        return redirect()->route('subclassifications.index')->with('info','Informacion actualizada');
    }


    public function destroy($id)
    {
        Subclassification::find($id)->delete();

        return redirect()->route('subclassifications.index');
    }
}
