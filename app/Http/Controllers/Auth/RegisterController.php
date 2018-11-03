<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'] ? $data['email'] : null,
            'password' => Hash::make($data['password']),
        ]);
    }
}
