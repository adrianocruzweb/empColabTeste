@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('empresas')}}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Request::is('*/edit'))
                    <h1>Editar Empresa</h1>
                    <form action="../{{$usuario->id}}/update" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-auto">
                            <label for="razao_social" class="form-label">Razão Social</label>
                            <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{$empresas->razao_social}}">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="cnpj" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$empresas->cnpj}}">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$empresas->email}}">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{$empresas->telefone}}">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="endereco" class="form-control" id="endereco" name="endereco" value="{{$empresas->endereco}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                    @else
                    <h1>Novo usuário</h1>
                    <form action="{{ url('/empresas/add')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-auto">
                            <label for="razao_social" class="form-label">Razão Social</label>
                            <input type="text" class="form-control" id="razao_social" name="razao_social">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="cnpj" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" name="cnpj">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="endereco" class="form-control" id="endereco" name="endereco">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
