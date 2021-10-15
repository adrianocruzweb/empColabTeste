@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-sm btn-primary" href="{{ url('/empresas/new') }}">Nova Empresa</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista das Empresas</h1>
                    <table class="table" id="listaEmpresas">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Razão Social</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">E-MAIL</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($empresas as $e)
                        <tr>
                            <th scope="row">{{$e->id}}</th>
                            <td>{{$e->razao_social}}</td>
                            <td>{{$e->cnpj}}</td>
                            <td>{{$e->email}}</td>
                            <td>{{$e->telefone}}</td>
                            <td>{{$e->endereco}}</td>
                            <td>
                                <a href="empresas/{{$e->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                            <td>
                                <form action="../empresas/{{$e->id}}/remove" method="post">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-sm btn-danger">Remover</button>
                                </form>
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
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="application/javascript">
$(document).ready(function(){
    $("#listaEmpresas")
    .addClass( 'nowrap' )
    .dataTable({
        responsive: true,
        columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
        ]
    });
})
</script>
@endsection
