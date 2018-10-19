<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Photo;
use App\Info;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }


    public function index()
    {
        return view('index');
        
    }

    public function home()
    {
        return view('home');
    }
}
