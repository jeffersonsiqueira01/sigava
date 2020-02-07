<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cidade;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function getList($state_id)
    {
        $data = Cidade::byState($state_id)->get();

        return response()->json($data);
    }
}
