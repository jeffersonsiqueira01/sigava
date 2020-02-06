<?php

namespace App\Http\Controllers;

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
}
