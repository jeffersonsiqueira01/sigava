@extends('app.layouts.app')

@section('title', 'Imóveis')
@section('imoveis', 'active')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-home" aria-hidden="true">&nbsp</i>- Imóveis</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/sigava">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Imóveis</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
        <a href="{{ route('imovel.create')}}">
            <button class="btn btn-primary" style="margin-top: 30px;
            margin-bottom: 10px;">
            <i class="fa fa-plus" aria-hidden="true">&nbsp</i>Novo Imóvel
            </button>
        </a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">   
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox mt-4">
                    <div class="ibox-title">
                        <h5>Lista de Imóveis </h5>
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

                                <table class="table table-property" data-paging="true" data-toggle-column="first" data-filtering="true" data-sorting="true" data-state="true">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="sm">ID</th>
                                            <th>Evento</th>
                                            <th>Resp. Coleta</th>
                                            <th>Informante</th>
                                            <th>Cidade/Estado</th>
                                            <th>Bairro</th>
                                            <th>Endereço</th>
                                            <th data-breakpoints="all">Complemento</th>
                                            <th>Data Coleta</th>
                                            <th>Valor Total</th>
                                            <th class="hidden">Situação</th>
                                            <th data-breakpoints="all" data-title="Métricas&nbsp;e&nbsp;Custos:">Métricas e Custos</th>
                                            <th data-breakpoints="all" data-title="Cômodos&nbsp;Extras:">Cômodos</th>
                                            <th data-breakpoints="all" data-title="Condições&nbsp;Físicas:">Condições Físicas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $p)    
                                        <tr>
                                            <td>{{ $p->id }}</td>
                                            <td>
                                                @if($p->objetivo === "1")
                                                    Venda
                                                @elseif($p->objetivo === "2")
                                                    Oferta
                                                @endif
                                            </td>
                                            <td>{{ $p->usercoleta }}</td>
                                            <td>{{ $p->contact->name }}</td>
                                            <td>{{ $p->address->cidade }}/{{ $p->address->uf }}</td>
                                            <td>{{ $p->address->bairro }}</td>
                                            <td>{{ $p->address->rua }}, {{ $p->address->numero }}</td>
                                            <td>{{ $p->address->complemento }}</td>
                                            <td>{{ date('d-m-y', strtotime($p->dtcoleta)) }}</td>
                                            <td>R$&nbsp;{{ number_format($p->vltotal, '2', '.', '') }}</td>
                                            <td class="hidden">{{ $p->situacao }}</td>
                                            <td> 
                                                <ul>
                                                    <li>
                                                        <b>Área Construída:</b> {{ $p->areaconstruida }} <span class="small">(m²)</span>
                                                    </li>
                                                    <li>
                                                        <b>Área Terreno:</b> {{ $p->areaterreno }} <span class="small">(m²)</span>
                                                    </li>
                                                    <li>
                                                        <b>Valor M²:</b> R$ {{  number_format($p->vlmetro, '2', '.', '') }} <span class="small"></span>
                                                    </li>                                                    
                                                    <li>
                                                        <b>Distância Polo:</b> {{ $p->distanciapolo }} <span class="small">(m)</span>
                                                    </li>
                                                    <li>
                                                        <b>Macrolocalização:</b> {{ $p->macrolocalizacao }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Índice Fiscal:</b> {{ $p->indicefiscal }} <span class="small"></span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <b>Nº. Quartos:</b> {{ $p->numquarto }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Nº. Suítes:</b> {{ $p->numsuite }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Nº. Banheiros:</b> {{ $p->numbanheiro }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Garagem Coberta:</b> 
                                                            @if($p->numgaragem === 0)
                                                                Não
                                                            @elseif($p->numgaragem === 1)
                                                                Sim
                                                            @endif
                                                         <span class="small"></span>

                                                    </li>
                                                    <li>
                                                        <b>Equipamentos:</b> {{ $p->equipamentos }} <span class="small"></span>
                                                    </li>       
                                                    <li>
                                                        <b>Condominio:</b> 
                                                        @if($p->condominio === 0)
                                                            Não
                                                        @elseif($p->condominio === 1)
                                                            Sim
                                                        @endif <span class="small"></span>
                                                    </li>                                             
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <b>Conservação:</b> {{ $p->conservacao->classificacao }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Padrão de Acabamento:</b> {{ $p->acabamento->classificacao }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Idade Aparente:</b> {{ $p->idadeaparente }} <span class="small">ano(s)</span>
                                                    </li>
                                                    <li>
                                                        <b>Valor Reedição:</b> R$ {{  number_format($p->custoreedicao, '2', '.', '') }} <span class="small"></span>
                                                    </li>
                                                    <li>
                                                        <b>Obs:</b> {{ $p->obs }}
                                                    </li>
                                                </ul>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               

                    </div>
                </div>
            </div>
        </div>
    </div>



  @endsection
