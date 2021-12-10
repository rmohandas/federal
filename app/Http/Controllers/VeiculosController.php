<?php

namespace App\Http\Controllers;

use App\Http\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    //
    public function create()
    {

        $categorias = Veiculo::get();

        return view('veiculos.create', compact('categorias'));

        
    }

    public function store(Request $request)
    {
       //dd($request->all());
       
       Veiculo::create([

           'proprietario' => $request->proprietario,
           'modelo' => $request->modelo,
           'marca' => $request->marca,
           'ano' => $request->ano,
           'renavam' => $request->renavam,
       ]);

       return "Veiculo cadastrador com sucesso!";

    }

}

