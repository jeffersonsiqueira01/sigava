@extends('app.layouts.app')

@section('title', 'Imóvel')

@section('content')
     <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2><i class="fa fa-database" aria-hidden="true">&nbsp</i>- Imóvel</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/sigava">Página Inicial</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/sigava/imovel">Imóveis</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Novo Imóvel</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2 text-right">
            <a href="{{ route('imovel.index')}}">
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
                        <h5>Dados do Imóvel: {{ $property->id}}</h5>
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
                        <div class="row">
                            <div class="col-md-6">
                                <p>Objetivo: {{ $property->objetivo }}</p>
                                <p>contact_id: {{ $property->contact_id }}</p>
                                <p>dtcoleta: {{ $property->dtcoleta }}</p>
                                <p>areaconstruida: {{ $property->areaconstruida }}</p>
                                <br/>
                                <br/>
                                <br/>

                                <p>
                                    Depreciação: {{ $arredondamentodep }}%
                                </p>
                                <p>
                                    Residual: {{ $percresidual }}%
                                </p>
                                <p>
                                    Depreciação: R$ {{ $vldepreciacao }}
                                </p>
                                <p>
                                    Valor Unitário: R$ {{ number_format($valorunitario, 2, '.', '  ') }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>dtcoleta: {{ $property->dtcoleta }}</p>
                                <p>vltotal: {{ $property->vltotal }}</p>
                                <p>codigodata: {{ $property->codigodata }}</p>
                                <p>areaterreno: {{ $property->areaterreno }}</p>
                                <p>Objetivo: {{ $property->dtcoleta }}</p>
                                <p>Objetivo: {{ $property->dtcoleta }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

