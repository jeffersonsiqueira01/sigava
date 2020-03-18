<?php

namespace App\Http\Controllers;

use App\Acabamento;
use Illuminate\Http\Request;

class AcabamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'classificacao'=>'required',
            'cub'=>'required',
            'estado' => 'required',
        ]);

        $acabamento = new Acabamento();
        $acabamento->classificacao = $request->classificacao;
        $acabamento->estado = $request->estado;
        $acabamento->cub = $request->cub;
        $acabamento->status = "A";
        
        $acabamento->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acabamento  $acabamento
     * @return \Illuminate\Http\Response
     */
    public function show(Acabamento $acabamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acabamento  $acabamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Acabamento $acabamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acabamento  $acabamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acabamento $acabamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acabamento  $acabamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acabamento $acabamento)
    {
        //
    }
}
