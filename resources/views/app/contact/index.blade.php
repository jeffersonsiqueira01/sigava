@extends('app.layouts.app')

@section('title', 'Contatos')
@section('contato', 'active')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-users" aria-hidden="true">&nbsp</i>- Contatos</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/sigava">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Contatos</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
        <a href="{{ route('contato.create')}}">
            <button class="btn btn-primary" style="margin-top: 30px;
            margin-bottom: 10px;">
            <i class="fa fa-plus" aria-hidden="true">&nbsp</i>Novo Contato
            </button>
        </a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">   
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox mt-4">
                    <div class="ibox-title">
                        <h5>Lista de Contatos </h5>
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="name">Nome</label>
                                    <input type="text" id="name" name="name" value="" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="col-form-label" for="tel">Telefone</label>
                                    <input type="text" id="tel" name="tel" value="" placeholder="Telefone" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="col-form-label" for="email">Email</label>
                                    <input type="text" id="email" name="email" value="" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="T" selected="">Todos</option>
                                        <option value="A">Ativo</option>
                                        <option value="I">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>COD.</th>
                                        <th>NOME</th>
                                        <th>TELEFONE</th>
                                        <th>EMAIL</th>
                                        <th>SITUAÇÃO</th>
                                        <th>AÇÃO</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($contacts as $contact)                
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->tel }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>
                                        @if ($contact->status === "A")
                                            Ativo
                                        @else
                                         Inativo
                                        @endif
                                        </td>
                                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
