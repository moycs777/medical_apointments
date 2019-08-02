<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Notifications\RegistrationNotification;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\DoctorsRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Doctor;
use Bitfumes\Multiauth\Model\Admin;

class DoctorsController extends Controller
{
    
    public function index()
    {
        $doctors = Doctor::orderBy('id','DESC')->paginate();

        return view('dashboard.doctors.index',compact('doctors'));
    }

    
    public function create()
    {
        return view('dashboard.doctors.create');
    }

   
    public function store(DoctorsRequest $request)
    {

        //dd($request->all());
        $admin = new Admin;
        $admin->name  = $request->first_name;
        $admin->email = $request->email;
        $admin->password = Hash::make('12345678');

        $admin->save();
        $admin->roles()->sync(1);
        //$admin->notify(new RegistrationNotification(request('password')));

        $doctor = new Doctor;

        $doctor->admin_id    = $admin->id;
        $doctor->identification_card = $request->identification_card;
        $doctor->first_name  = $request->first_name;
        $doctor->last_name   = $request->last_name;
        $doctor->gender      = $request->input('genero');
        $doctor->address     = $request->address;
        $doctor->home_phone  = $request->home_phone;
        $doctor->work_phone  = $request->work_phone;
        $doctor->mobile_1    = $request->mobile_1;
        $doctor->mobile_2    = $request->mobile_2;
        $doctor->email       = $request->email;
        $doctor->beeper      = $request->beeper;
        $doctor->status      = 1;

        $doctor->save();

        //return redirect()->route('doctors.index');
        return redirect()->route('doctors.index')->with('info','Informacion actualizada');
    }

    
    public function edit($id)
    {
        $doctor = Doctor::find($id);

        return view('dashboard.doctors.edit',compact('doctor'));
    }

    
    public function update(DoctorUpdateRequest $request, $id)
    {
        //dd($request->all());
        $doctor = Doctor::find($id);

        $doctor->identification_card = $request->identification_card;
        $doctor->first_name  = $request->first_name;
        $doctor->last_name   = $request->last_name;
        $doctor->gender      = $request->input('genero');
        $doctor->address     = $request->address;
        $doctor->home_phone  = $request->home_phone;
        $doctor->work_phone  = $request->work_phone;
        $doctor->mobile_1    = $request->mobile_1;
        $doctor->mobile_2    = $request->mobile_2;
        $doctor->email       = $request->email;
        $doctor->beeper      = $request->beeper;
        $doctor->status      = isset($request->status) ? 1 : 0;

        $doctor->save();

        //return redirect()->route('doctors.index');
        return redirect()->route('doctors.index')->with('info','Informacion actualizada');

    }

    
    public function destroy($id)
    {

        $doctor_especialidad = DB::table('doctor_specialty')->where('doctor_id', $id)->first();
        if($doctor_especialidad != null){
           return redirect()->route('doctors.index')
                            ->with('info','Doctor no debe de eliminarse, esta relacionado a una especialidad'); 
        }
       
        $doctor = Doctor::find($id);

        $admin = $doctor->admin;
        
        $doctor->delete();
        //se debe eliminar tambien el admin de logueo
        $admin->delete();

        return redirect()->route('doctors.index');
    }
}
