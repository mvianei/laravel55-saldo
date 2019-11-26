@extends('adminlte::page')

@section('content_header')
<h1>Usuários</h1>
<ol class="breadcrumb">
    <li><a href="/admin">Dashboard</a></li>
    <li><a href="">Consulta usuários</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <form action="{{ route('usuario.search') }}" method="POST" class="form form-inline">
            {!! csrf_field() !!}
            <input type="text" name="id" class="form-control" placeholder="ID">
            <input type="text" name="name" class="form-control">
            <input type="email" name="email" class="form-control">
            <select name="type" class="form-control">
                <option value="">Tipo</option>
                @foreach ($types as $key => $type)
                <option value="{{ $key }}">{{ $type }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
        @if (isset($dataForm))
        {!! $usuarios->appends($dataForm)->links() !!}
        @else
        {!! $usuarios->links() !!}
        @endif
    </div>
</div>
@stop
