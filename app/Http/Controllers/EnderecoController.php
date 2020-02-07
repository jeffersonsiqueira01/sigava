<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;

class EnderecoController extends Controller
{
    public function index()
    {
        return view('app.endereco.index');
    }

    public function create(){
        return view('app.endereco.create');
    }

    public function store(Request $request)
    {

    }
}
