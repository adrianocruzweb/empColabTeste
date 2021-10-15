@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seja Bem Vindo W2O') }}
                    <br>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a class="bnt btn-sm btn-success" href="{{url('empresas')}}">Lista de empresas</a>
                        </div>
                        <div class="col-4">
                            <a class="bnt btn-sm btn-success" href="{{url('colaboradores')}}">Lista dos colaboradores</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
