<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Exception;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Db;
use App\Http\Requests\DiseaseStoreRequest;
use App\Http\Requests\DiseaseUpdateRequest;
use App\Disease;
use App\Subclassification;

class DiseasesController extends Controller
{
    
    public function index(Request $request)
    {

        //dd($request->all());
        $name     = $request->get('name_1');
               
        $diseases = Disease::orderBy('id','DESC')
                    ->typedisease()
                    ->disease($name)
                    ->paginate(8); 
               
        //$diseases = Disease::where('subclassification_id','230')->orderBy('id','DESC')->paginate();

        return view('dashboard.diseases.index',compact('diseases'));
    }

    
    public function create()
    {
        $subclassifications = Subclassification::all();
        if($subclassifications == null){
          return redirect()->route('diseases.index')
                           ->withErrors(['Error', 'Subclasificacion no registrada']);
        }

        return view('dashboard.diseases.create',compact('subclassifications'));
    }

    
    public function store(DiseaseStoreRequest $request)
    {
        $disease = new Disease;

        $disease->subclassification_id = $request->get('subclassification_id');
        $disease->code  = $request->get('code');
        $disease->name  = $request->get('name');
        $disease->symbol  = "0";
        $disease->save();

        //return redirect()->route('diseases.index');
        return redirect()->route('diseases.index')->with('info','Informacion actualizada');
    }

    
    public function edit($id)
    {
        $subclassifications = Subclassification::all();

        if (is_null( $subclassifications))
           return response('no encontrado', 404);

        $disease= Disease::find($id);
        
        if (!is_null($disease))
           return view('dashboard.diseases.edit',compact('disease','subclassifications'));
        else
           return response('no encontrado', 404);
        
    }

    public function update(DiseaseUpdateRequest $request, $id)
    {
        $disease= Disease::find($id);   

        $disease->fill($request->all())->save();

        //return redirect()->route('diseases.index');
        return redirect()->route('diseases.index')->with('info','Informacion actualizada');
    }


    public function destroy($id)
    {

        // Verificar si esta asociada a una consulta
        $consulta_medica = DB::table('consultations')->where('disease_id',$id)->first();

        if($consulta_medica != null){
           return redirect()->route('diseases.index')
                            ->with('info','Enfermedad no debe de eliminarse, esta relacionado a una consulta medica'); 
        }

        Disease::find($id)->delete();

        return redirect()->route('diseases.index');
    }
}
