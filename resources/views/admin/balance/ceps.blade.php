@extends('adminlte::page')

@section('content_header')
<h1>Consulta CEP</h1>
<ol class="breadcrumb">
    <li><a href="/admin">Dashboard</a></li>
    <li><a href="">Consulta CEP</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        @include('admin.includes.alerts')
        <form action="{{ route('cep.search') }}" method="GET" class="form form-inline">
            {!! csrf_field() !!}
            <input type="number" name="cep" class="form-control" placeholder="CEP" required>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>
    <div class="box-body">
        {{ session('status') }}
    </div>
</div>
@stop
