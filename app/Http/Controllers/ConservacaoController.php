<?php

namespace App\Http\Controllers;

use App\Conservacao;
use Illuminate\Http\Request;

class ConservacaoController extends Controller
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
            'descricao'=>'required',
            'classificacao'=>'required',
            'estado' => 'required',
            'coef' => 'required',
        ]);

        $conservacao = new Conservacao();
        $conservacao->descricao = $request->descricao;
        $conservacao->classificacao = $request->classificacao;
        $conservacao->estado = $request->estado;
        $conservacao->coef = $request->coef;
        $conservacao->status = "A";
        
        $conservacao->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conservacao  $conservacao
     * @return \Illuminate\Http\Response
     */
    public function show(Conservacao $conservacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conservacao  $conservacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Conservacao $conservacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conservacao  $conservacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conservacao $conservacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conservacao  $conservacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conservacao $conservacao)
    {
        //
    }
}
