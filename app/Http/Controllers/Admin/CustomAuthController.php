<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class CustomAuthController extends Controller
{
    //

    public function showLinkRequestForm()
    {
        // dd('vista reset');
        return view('auth.passwords.admin.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // dd($request->all());
        // dd('post');
        $this->validateEmail($request);

    }

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

}

