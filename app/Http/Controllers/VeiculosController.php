<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    //
    public function create()
    {
        return view('veiculos.create');
        
    }

    public function store(Request $request)
    {
       dd($request->all());
    }

}

