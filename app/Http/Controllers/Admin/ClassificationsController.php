<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClassificationStoreRequest;
use App\Http\Requests\ClassificationUpdateRequest;

use Illuminate\Support\Facades\DB;
use App\Pathology;
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


    public function store(ClassificationStoreRequest $request)
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

    public function update(ClassificationUpdateRequest $request, $id)
    {

        $classification = Classification::find($id);
        $classification->name = $request->name;
        $classification->oms = ($request->oms == null) ? "0": "1";
        $classification->particular =($request->particular == null) ? "0": "1";

        $classification->save();

        //$classification->fill($request->all())->save();

        //return redirect()->route('classifications.index');
        return redirect()->route('classifications.index')->with('info','Informacion actualizada');
    }

    public function destroy($id)
    {
        
        // Validar sublasificaciones a traves de las relaciones
        //$subclas = Classification::find($id)->subclassifications; Funciona y se puede iterar foreach

        $subclas = DB::table('subclassifications')->where('classification_id', $id)->first();
        if($subclas != null){
            return redirect()->route('classifications.index')->with('info','Existen registros vinculados, no puede eliminarse (Subclasificaciones');
        }

        $pathologies = Pathology::where('classification_id', $id)->first();
        if($pathologies != null){
            return redirect()->route('classifications.index')->with('info','Existen registros vinculados, no puede eliminarse (Patologias)');
        }

        Classification::find($id)->delete();

        return redirect()->route('classifications.index')->with('info','Informacion eliminada...');
    }
}
