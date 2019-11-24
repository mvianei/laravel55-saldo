@extends('adminlte::page')

@section('content_header')
<script>
    function myFunction() {
                  var tipo_pessoa = document.querySelector('input[name="radio_pessoa"]:checked').value;
                //   document.getElementById('demo').innerHTML = tipo_pessoa;
                    if (tipo_pessoa == 'J') {
                        document.getElementById('lblnome').innerHTML = "Razão social";
                        document.getElementById('lblcpfcnpj').innerHTML = "CNPJ";
                        document.getElementById("cpfcnpj").setAttribute("placeholder", "CNPJ");
                        document.getElementById("nome").setAttribute("placeholder", "Razão social");
                        document.getElementById("cpfcnpj").setAttribute("onKeyPress", "MascaraCNPJ(cad_pessoa.cpfcnpj);");
                        document.getElementById("cpfcnpj").setAttribute("onblur", "ValidarCNPJ(cad_pessoa.cpfcnpj);");
                        document.getElementById("cpfcnpj").setAttribute("maxlength", "18");
                    }
                    else {
                        document.getElementById('lblnome').innerHTML = "Nome";
                        document.getElementById('lblcpfcnpj').innerHTML = "CPF";
                        document.getElementById("cpfcnpj").setAttribute("placeholder", "CPF");
                        document.getElementById("nome").setAttribute("placeholder", "Nome");
                        document.getElementById("cpfcnpj").setAttribute("onKeyPress", "MascaraCPF(cad_pessoa.cpfcnpj);");
                        document.getElementById("cpfcnpj").setAttribute("onblur", "ValidarCPF(cad_pessoa.cpfcnpj);");
                        document.getElementById("cpfcnpj").setAttribute("maxlength", "14");
                    }
                }
</script>
<h1>Cadastro {{ $tipo_pessoa }}</h1>
<p id="demo"></p>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
    <li>Cadastro de {{ $tipo_pessoa }}</li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box box-info">
            @include('admin.includes.alerts')
            <div class="box-header with-border">
                <h3 class="box-title">Informe os dados abaixo</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('pessoa.store') }}" name="cad_pessoa">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="col-sm-3">
                        <label>Pessoa</label>
                        <label class="container">Física
                            <input type="radio" id="idtipopessoa" value="F" name="radio_pessoa" onclick="myFunction()"
                                {{ $pessoa == 'F' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Jurídica
                            <input type="radio" id="idtipopessoa" value="J" name="radio_pessoa" onclick="myFunction()"
                                {{ $pessoa == 'J' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-sm-3">
                        <label for="cpfcnpj">
                            <div id="lblcpfcnpj"></div>
                        </label>
                        <input type="text" class="form-control" id="cpfcnpj" placeholder="" onkeypress="" maxlength=""
                            onblur="">
                    </div>
                    <div class="col-sm-6">
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
{{-- Cadastro de Telefone --}}
<div class="row">
    <div class="col-sm-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Telefones</h3>
                <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="2 telefones" class="badge bg-blue">2</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="telefone">Telefone
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" id="telefone" name="telefone" maxlength="15"
                                    placeholder="Telefone com DDD" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipo_tel">Tipo
                            </label>
                            <select class="form-control select2" style="width: 100%;" id="tipo_tel">
                                <option selected="selected">Comercial</option>
                                <option>Financeiro</option>
                                <option>Residencial</option>
                                <option>Whatsapp</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <a class="btn btn-app primary">
                                <i class="fa fa-save"></i> Salvar </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="box">
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Ação</th>
                                        <th>Telefone</th>
                                        <th>Tipo</th>
                                        <th>Inclusão</th>
                                        <th>Responsável</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal"
                                                    data-target="#modal-editar" title="Editar">&nbsp;</i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i></a>
                                        </td>
                                        <td>(51)3307-7301</td>
                                        <td>Residencial</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal" title="Editar"
                                                    data-target="#modal-editar">&nbsp;</i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg" data-toggle="tooltip"
                                                    title="Excluir">&nbsp;</i></a>
                                        </td>
                                        <td>(51)99634-7301</td>
                                        <td>Whatsapp</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Cadastro de E-mail --}}
<div class="row">
    <div class="col-sm-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">E-mails</h3>
                <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="2 e-mails" class="badge bg-blue">2</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">E-mail
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" id="email" name="email" placeholder="E-mail" class="form-control"
                                    validate>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipo_email">Tipo
                            </label>
                            <select class="form-control select2" style="width: 100%;" id="tipo_email">
                                <option selected="selected">Comercial</option>
                                <option>Financeiro</option>
                                <option>Residencial</option>
                                <option>Whatsapp</option>
                            </select>
                        </div>
                        <div class="input-group">
                            {{-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</button> --}}
                            <a class="btn btn-app">
                                <i class="fa fa-save"></i> Salvar </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="box">
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Ação</th>
                                        <th>E-mail</th>
                                        <th>Tipo</th>
                                        <th>Inclusão</th>
                                        <th>Responsável</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal"
                                                    data-target="#modal-editar" title="Editar">&nbsp;</i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i></a>
                                        </td>
                                        <td>mvianei@gmail.com</td>
                                        <td>Comercial</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal"
                                                    data-target="#modal-editar" title="Editar">&nbsp;</i></a>
                                            <a href="#"><i class="fa fa-trash fa-lg" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i></a>
                                        </td>
                                        <td>mvianei@hotmail.com</td>
                                        <td>Financeiro</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Cadastro de Dívidas --}}
@if($tipo == 'devedor')
<div class="row">
    <div class="col-sm-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Dívidas</h3>
                <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="2 e-mails" class="badge bg-red">2</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <label for="tipo_documento">Documento</label>
                            <select class="form-control select2" style="width: 100%;" id="tipo_documento">
                                <option selected="selected">Boleto</option>
                                <option>Cheque</option>
                                <option>Fatura</option>
                                <option>Protesto</option>
                            </select>
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" maxlength="100" required>
                        </div>
                        <div class="form-group">
                            <label for="vencimento">Vencimento</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control" id="vencimento" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-money-bill"></i>
                                </div>
                                <input type="number" class="form-control" id="valor" min="1" step="0.01" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <a class="btn btn-app">
                                <i class="fa fa-save"></i>Salvar</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Ação</th>
                                        <th>Vencimento</th>
                                        <th>Valor</th>
                                        <th>Documento</th>
                                        <th>Inclusão</th>
                                        <th>Responsável</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal"
                                                        data-target="#modal-editar" title="Editar">&nbsp;</i></a>
                                                <a href="#"><i class="fa fa-trash fa-lg" data-toggle="modal"
                                                        title="Excluir">&nbsp;</i></a>
                                            </td>
                                            <td>26/01/1982</td>
                                            <td>200,00</td>
                                            <td>Fatura</td>
                                            <td>26/10/2019 12:00:00</td>
                                            <td>Michelangelo</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"><i class="fa fa-edit fa-lg" data-toggle="modal"
                                                        data-target="#modal-editar" title="Editar">&nbsp;</i></a>
                                                <a href="#"><i class="fa fa-trash fa-lg" data-toggle="modal"
                                                        title="Excluir">&nbsp;</i></a>
                                            </td>
                                            <td>26/10/2019</td>
                                            <td>55,00</td>
                                            <td>Protesto</td>
                                            <td>26/10/2019 12:00:00</td>
                                            <td>Michelangelo</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>255,00</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="modal fade" id="modal-editar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop
