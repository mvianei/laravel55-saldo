@extends('site.layouts.app_framework7')

@section('title', 'Perfil')

@section('content')
@include('admin.includes.alerts')
<div class="list no-hairlines-md">
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" id="my-form">
        {!! csrf_field() !!}
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-inner">
                        <h1>Meu Perfil</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content item-input">
                    <div class="item-inner">
                        <div class="item-title item-label">Nome</div>
                        <div class="item-input-wrap">
                            <input type="text" value="{{ auth()->user()->name }}" name="name" placeholder="Nome">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content item-input">
                    <div class="item-inner">
                        <div class="item-title item-label">E-mail</div>
                        <div class="item-input-wrap">
                            <input type="email" value="{{ auth()->user()->email }}" name="email" placeholder="Email">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content item-input">
                    <div class="item-inner">
                        <div class="item-title item-label">Senha</div>
                        <div class="item-input-wrap">
                            <input type="password" value="" name="password" placeholder="Senha" required validate>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content item-input">
                    <div class="item-inner">
                        @if (auth()->user()->image != null)
                        <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}"
                            style="max-width: 50px;">
                        @endif
                        <label for="name">Imagem</label>
                        <input type="file" value="{{ auth()->user()->image }}" name="image" placeholder="Imagem"
                            class="form-control">
                    </div>
                </div>
            </li>
        </ul>
        <div class="block">
            <div class="row">
                <div class="col">
                    <button class="button button-outline button-round button-raised">Atualizar</button>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
    </form>
</div>
@endsection
