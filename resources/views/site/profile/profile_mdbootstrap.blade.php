@extends('site.layouts.app_mdbootstrap')

@section('title', 'Perfil')

@section('content')
<h1>Meu Perfil</h1>
@include('admin.includes.alerts')

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="md-form md-outline">
        <i class="fas fa-user prefix"></i>
        <input type="text" value="{{ auth()->user()->name }}" name="name" class="form-control">
        <label for="name">Nome</label>
    </div>
    <div class="md-form md-outline">
        <i class="fas fa-envelope prefix"></i>
        <input type="email" id="email" value="{{ auth()->user()->email }}" name="email" class="form-control">
        <label for="email">E-mail</label>
    </div>
    <div class="md-form md-outline">
        <i class="fas fa-lock prefix"></i>
        <input type="password" id="senha" value="" name="password" class="form-control">
        <label for="senha">Senha</label>
    </div>
    {{--     <div class="form-group">
        @if (auth()->user()->image != null)
        <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}"
    style="max-width: 50px;">
    @endif
    <label for="name">Imagem</label>
    <input type="file" value="{{ auth()->user()->image }}" name="image" class="form-control">
    </div>
    --}}
    <div class="md-form md-outline">
        <div class="mb-4">
            @if (auth()->user()->image != null)
            <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}"
                style="max-width: 50px;">
            @endif
            <div class="btn btn-mdb-color btn-rounded float-left">
                <span>Add photo</span>
                <input type="file">
            </div>
        </div>
    </div>
    <div class="md-form md-outline">
        <button type="submit" class="btn btn-info">Atualizar perfil</button>
    </div>

</form>
@endsection
