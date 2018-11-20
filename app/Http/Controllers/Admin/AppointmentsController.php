<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Appointment;
use App\Doctor;

class AppointmentsController extends Controller
{
    
    public function index()
    {
        
        $appointments = Appointment::orderBy('id','DESC')->paginate();

        return view('dashboard.appointments.index',compact('appointments'));
    }

  
    public function create()
    {
        $doctors = Doctor::all();

        return view('dashboard.appointments.create',compact('doctors'));
    }

    
    public function store(Request $request)
    {

         $fec_consulta = $request->input('appointment_date');
                   
         $hoy = Carbon::now();
         $hoy1 = $hoy->format("Y/m/d");  // convierto a string


         if (strtotime($fec_consulta) < strtotime($hoy1) ){
            return redirect()->route('appointments.create')
               ->with('info','Fecha de consulta no puede ser menor (<) a la fecha actual');  
         }

         //Obtener el dia de la fecha
         //$fechaInicio=strtotime("2016-08-01");
         $fec_cons=strtotime($fec_consulta);
         $i=$fec_cons;
         $dia = date('N', $i);
         dd($dia);
         //$fechaFin=strtotime("2016-08-20");
        //Recorro las fechas y con la función strotime obtengo los Lunes
         //dd($fec_cons);
        // for($i=$fec_cons; $i<=$fec_cons; $i+=86400){
        //     //Sacar el dia de la semana con el modificador N de la funcion date
        //     $dia = date('N', $i);
        //     // if($dia==1){
        //     //     echo "Lunes. ". date ("Y-m-d", $i)."<br>";
        //     // }
        //     dd($dia);
        // }

        dd($request->all());
        //Appointment::create($request->all());

        return redirect()->route('appointments.index');
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
