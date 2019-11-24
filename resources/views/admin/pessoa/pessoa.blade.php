@extends('adminlte::page')

@section('content_header')
<h1>Pessoas</h1>
<ol class="breadcrumb">
    <li><a href="/admin">Dashboard</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Cadastro pessoa</h3>
    </div>
    <div class="box-body">
        @include('admin.includes.alerts')
        <form method="POST" action="{{ route('pessoa.store') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="number" name="value" placeholder="Valor Retirada" class="form-control" min="0" ,
                    step="0.01">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Sacar</button>
            </div>
        </form>
    </div>
</div>
@stop
