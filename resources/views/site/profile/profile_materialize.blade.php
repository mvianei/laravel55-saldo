@extends('site.layouts.app_materialize')

@section('title', 'Perfil')

@section('content')
<h3>Meu Perfil</h3>
@include('admin.includes.alerts')
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" value="{{ auth()->user()->name }}" name="name">
            <label class="active">Nome</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="email" value="{{ auth()->user()->email }}" name="email">
            <label class="active">E-mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="password" value="" name="password">
            <label class="active">Senha</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <div class="card-panel grey lighten-5 z-depth-1">
                @if (auth()->user()->image != null)
                <img src="{{ url('storage/users/'.auth()->user()->image) }}" class="circle responsive-img"
                    alt="{{ auth()->user()->name }}" style="max-width: 50px;">
                @endif
                <span class="black-text">
                    <input type="file" value="{{ auth()->user()->image }}" name="image">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="btn blue">Atualizar perfil</button>
        </div>
    </div>
</form>
@endsection
