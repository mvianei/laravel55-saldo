@extends('site.layouts.app3')

@section('content')

<h2 style="color: white;">Cadastro de {{ $tipo }}</h2>

<div class="shadow p-3 mb-5 bg-white rounded" style="box-shadow: 0 0.5rem 1rem rgba(44, 240, 214,1.15)!important;">
    @include('admin.includes.alerts')
    <div class="col-sm-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Informe os dados abaixo</h3>
                <form method="POST" action="{{ route('pessoa.store') }}" name="cad_pessoa">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="form-group col-md-auto">
                            <label>Pessoa</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="idtipopessoa1" value="F" name="radio_pessoa"
                                    class="custom-control-input" {{ $pessoa == 'F' ? 'checked' : '' }}
                                    onclick="myFunction();">
                                <label class="custom-control-label" for="idtipopessoa1">Física</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="idtipopessoa2" value="J" name="radio_pessoa"
                                    class="custom-control-input" {{ $pessoa == 'J' ? 'checked' : '' }}
                                    onclick="myFunction();">
                                <label class="custom-control-label" for="idtipopessoa2">Jurídica</label>
                            </div>
                        </div>
                        <div class="form-group col-md-auto">
                            <label for="cpfcnpj">
                                <div id="lblcpfcnpj"></div>
                            </label>
                            <input type="text" class="form-control" id="cpfcnpj" placeholder="" onkeypress=""
                                maxlength="" onblur="" value="" name="cpfcnpj">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nome">
                                <div id="lblnome"></div>
                            </label>
                            <input type="text" class="form-control" id="nome" placeholder="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.telefones')
@include('admin.includes.emails')
@include('admin.includes.enderecos')


@if($tipo == 'devedor')
@include('admin.includes.dividas')
@endif

@endsection
