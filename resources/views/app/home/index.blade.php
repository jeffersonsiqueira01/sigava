@extends('app.layouts.app')

@section('title', 'Página Inicial')
@section('home', 'active')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-tachometer" aria-hidden="true">&nbsp</i>- Página Inicial</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <strong>Página Inicial</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Bem vindo ao SIGAVA!
                            </h1>
                            <small>
                                Esse é o esqueleto do projeto SIGAVA.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
@endsection
