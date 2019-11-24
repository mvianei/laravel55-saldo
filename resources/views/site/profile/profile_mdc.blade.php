@extends('site.layouts.app_mdc')

@section('title', 'Perfil')

@section('content')

<h1>Meu Perfil</h1>
@include('admin.includes.alerts')
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" value="{{ auth()->user()->name }}" name="name" placeholder="Nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" value="{{ auth()->user()->email }}" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" value="" name="password" placeholder="Senha" class="form-control">
    </div>
    <div class="form-group">
        @if (auth()->user()->image != null)
            <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px;">
        @endif
        <label for="name">Imagem</label>
        <input type="file" value="{{ auth()->user()->image }}" name="image" placeholder="Imagem" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Atualizar perfil</button>
    </div>

</form>
@endsection
