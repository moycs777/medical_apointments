<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disease;
use App\Subclassification;

class DiseasesController extends Controller
{
    
    public function index()
    {
        $diseases = Disease::orderBy('id','DESC')->paginate();

        return view('dashboard.diseases.index',compact('diseases'));
    }

    
    public function create()
    {
        $subclassifications = Subclassification::all();

        return view('dashboard.diseases.create',compact('subclassifications'));
    }

    
    public function store(Request $request)
    {
        $disease = new Disease;

        $disease->name  = $request->get('name');
        $disease->subclassification_id = $request->get('subclassification_id');
        $disease->symbol  = "0";
        $disease->save();

        return redirect()->route('diseases.index');
    }

    
    public function edit($id)
    {
        $subclassifications = Subclassification::all();

        $disease= Disease::find($id);

        return view('dashboard.diseases.edit',compact('disease','subclassifications'));
    }

    public function update(Request $request, $id)
    {
        $disease= Disease::find($id);

        $disease->fill($request->all())->save();

        return redirect()->route('diseases.index');
    }


    public function destroy($id)
    {
        Disease::find($id)->delete();

        return redirect()->route('diseases.index');
    }
}
