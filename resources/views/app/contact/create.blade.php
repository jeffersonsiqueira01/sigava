@extends('app.layouts.app')

@section('title', 'Cadastro Contato')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-users" aria-hidden="true">&nbsp</i>- Novo contato</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/sigava">Página Inicial</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/sigava/contato">Contato</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Novo Contato</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
        <a href="{{ route('contato.index')}}">
            <button class="btn btn-primary" style="margin-top: 30px;
            margin-bottom: 10px;">
            <i class="fa fa-reply" aria-hidden="true">&nbsp</i>Voltar
            </button>
        </a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">   
    <div class="row">
        <div class="col-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Novo Contato</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>                            
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    @include('app.contact.form.contact')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

