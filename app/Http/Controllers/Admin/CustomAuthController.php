<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use App\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomReetPassword;
use Illuminate\Support\Facades\Hash;

//use Illuminate\Support\Facades\Redirect;

//use App\Http\Controllers\Admin\Session;
use Session;

class CustomAuthController extends Controller
{

    public function showLinkRequestForm()
    {
        
        return view('auth.passwords.admin.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        
        $this->validateEmail($request);

        $user = Admin::where('email',$request->email )->first();
        if ($user == null) {
            //return "email no encontrado";
            Session::flash('message','Email no encontrado...');
            return \Redirect::back();

            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($request)]);
            
            // dd($user);
        }
        DB::table('password_resets_admins')->where('email', '=', $user->email)->delete();

        $token = rand(1000, 100000000);

        $pass_reset = DB::table('password_resets_admins')->insert(
            ['email' =>  $user->email, 'token' => $token]
        );

        $this->sendEmail($user->email, $token);

        // return redirect()->route('admin.customauth.email')
        //        ->with('info','Se ha enviado un correo a su email personal');
        //return \Redirect::back()->with('info', 'Se ha enviado un email a su cuenta de correo...');
        Session::flash('message','Se ha enviado un email a su cuenta de correo...');
        return \Redirect::back();
                
    }

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    public function sendEmail($email, $token)
    {
        $url = route('admin.customauth.token', ['token' => $token ]);
        Mail::to($email)->send(new CustomReetPassword($token,'Reseteo de password', $url));
        
    }

    public function showResetForm($token)
    {
        
        $user = DB::table('password_resets_admins')->where('token', '=', $token)->first();
        if ($user == null) {
            return "error al buscar usuario";
        }
        return view('auth.passwords.admin.reset')->with(
            ['token' => $token, 'email' => $user->email]
        );
        // dd($user);
    }

    public function reset(Request $request)
    {
        $user = DB::table('password_resets_admins')->where('token', '=', $request->token)->first();

        if ($user == null) {
            return "Error al buscar usuario";
        }

        $this->resetPassword($user,$request->password);

        // dd($request->all());

        Session::flash('message','Se ha cambiado su password satisfactoriamente...');
        return \Redirect::back();
        return "password cambiado con exito";
    }


    protected function resetPassword($user, $password)
    {
        $password = Hash::make($password);
        DB::table('password_resets_admins')->where('email', '=', $user->email)->delete();

        DB::table('admins')
            ->where('email',  $user->email)
            ->update(['password' => $password]);


        // $this->guard()->login($user);
    }


}

