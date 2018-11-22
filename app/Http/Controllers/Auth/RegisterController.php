<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\ClinicalPatient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;
   
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

  
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            //se debe usar una manera para que el email pueda estar en blanco
            'email' => 'string|email|max:255|unique:users', 
            //'email' => 'required|string|email|max:255|unique:users', 
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

   
    protected function create(array $data)
    {
        //dd($data);
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'] ? $data['email'] : null,
            'password' => Hash::make($data['password']),
        ]);
        $patient = new ClinicalPatient();
        $patient->user_id = $user->id;
        $patient->first_name = $user->name;
        $patient->last_name = $user->name;
        $patient->dni = '1234';
        $patient->gender = 'M';
        //$patient->status = 1;
        $patient->save();
        //dd($patient);

        return $user;
    }
}
