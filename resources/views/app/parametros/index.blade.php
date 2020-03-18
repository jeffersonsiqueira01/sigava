@extends('app.layouts.app')

@section('title', 'Variáveis')
@section('parametros', 'active')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-sliders" aria-hidden="true">&nbsp</i>- Parâmetros</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/sigava">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Parâmetros</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">   
    <div class="row">
        
        @include('app.parametros.conservacao.index')
        @include('app.parametros.acabamento.index')
        
    </div>
</div>


    
@endsection
