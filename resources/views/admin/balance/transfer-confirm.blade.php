@extends('adminlte::page')

@section('content_header')
    <h1>Confirmar Transferência</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="/admin/balance">Saldo</a></li>
        <li><a href="/admin/balance/transfer">Transferir</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Confirmar Transferência</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')

            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <p><strong>Saldo atual: </strong>{{ number_format($balance->amount,2,',','.') }}</p>
            <form method="POST" action="{{ route('transfer.store') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="sender_id" value="{{ $sender->id }}">
                <div class="form-group">
                    <input type="number" name="value" placeholder="Valor" class="form-control" min="0", step="0.01">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>
            </form>
        </div>
    </div>
@stop
