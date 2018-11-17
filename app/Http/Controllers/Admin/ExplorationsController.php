<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exploration;

class ExplorationsController extends Controller
{
    
    public function index()
    {
        $explorations = Exploration::orderBy('id','DESC')->paginate();

        return view('dashboard.explorations.index',compact('explorations'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
