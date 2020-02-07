@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nome:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nome">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sobrenome">Sobrenome:</label>
                                    <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome">
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="cpf">CPF:</label>
                                        <input class="form-control" type="text" name="cpf" placeholder="CPF">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="rg">RG:</label>
                                        <input class="form-control" type="text" name="rg" placeholder="RG">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="telefone">Telefone:</label>
                                        <input class="form-control" type="text" name="telefone" placeholder="Telefone">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="dtnasc">Data de Nasc.</label>
                                        <input class="form-control" type="date" name="dtnasc" placeholder="Data de Nascimento">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email:</label>
                                        <input class="form-control" type="mail" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="password">Senha</label>
                                        <input class="form-control" type="password" name="password" placeholder="Senha">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir Senha">
        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 text-right">
                                        <button type="reset" class="btn btn-info">Limpar</button>
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
