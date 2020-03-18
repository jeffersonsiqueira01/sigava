<?php

namespace App\Http\Controllers;

use App\Acabamento;
use App\Conservacao;

class AppController extends Controller
{


    public function index()
    {
        return view('app/home/index');
    }

    public function minor()
    {
        return view('app/home/minor');
    }
    
    public function parametro()
    {
        $conservacoes = Conservacao::all();
        $acabamentos = Acabamento::all();

        return view('app/parametros/index', compact('conservacoes', $conservacoes, 'acabamentos', $acabamentos));
    }
    public function acabamento()
    {
        return view('app/parametros/acabamento/index');
    }
}
