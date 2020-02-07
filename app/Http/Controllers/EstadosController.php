<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index()
    {
        $data = Estado::all();
    }

    public function getList()
    {
        $data = Estado::all();

        return response()->json($data);
    }
}
