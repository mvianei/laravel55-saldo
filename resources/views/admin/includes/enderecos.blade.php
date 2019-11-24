<div class="shadow p-3 mb-5 bg-white rounded" style="box-shadow: 0 0.5rem 1rem rgba(44, 240, 214,1.15)!important;">
    <div class="col-sm-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Endereços</h3>
                <div class="form-row">
                    <div class="form-group col-md-auto">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-editar-endereco">
                            <i class="fa fa-plus"></i> Adicionar
                        </button>
                    </div>
                </div>
            </div>
            @section('form-endereco')
            <form method="POST" action="" name="cad_endereco">
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="tipo_endereco">Tipo</label>
                        <select class="form-control select2" style="width: 100%;" id="tipo_endereco">
                            <option selected="selected">Comercial</option>
                            <option>Residencial</option>
                            <option>Financeiro</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="cep">CEP</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="cep" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="uf">UF</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="uf" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="localidade">Localidade</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="localidade" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="logradouro">Logradouro</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="logradouro" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="complemento">Complemento</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="complemento" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="bairro">Bairro</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="bairro">
                        </div>
                    </div>
                </div>
            </form>
            @endsection
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <th>Ação</th>
                                    <th>Tipo</th>
                                    <th>CEP</th>
                                    <th>Logradouro</th>
                                    <th>Complemento</th>
                                    <th>Bairro</th>
                                    <th>Localidade</th>
                                    <th>UF</th>
                                    <th>Inclusão</th>
                                    <th>Responsável</th>
                                </thead>
                                <tbody>
                                    @php($i = 2)
                                    @foreach ($enderecos as $endereco)
                                    @php($i++)
                                    <tr>
                                        <td>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                data-toggle="modal" data-target="#modal-editar-endereco">
                                                <i class="fa fa-edit fa-lg tooltip-test" title="Editar"></i>&nbsp;
                                            </button>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                    class="fa fa-trash fa-lg tooltip-test" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i>
                                            </button>
                                        </td>
                                        <td>{{ $endereco['tipo'] }}</td>
                                        <td>{{ $endereco['cep'] }}</td>
                                        <td>{{ $endereco['logradouro'] }}</td>
                                        <td>{{ $endereco['complemento'] }}</td>
                                        <td>{{ $endereco['bairro'] }}</td>
                                        <td>{{ $endereco['localidade'] }}</td>
                                        <td>{{ $endereco['uf'] }}</td>
                                        <td>{{ $endereco['inclusao'] }}</td>
                                        <td>{{ $endereco['responsavel'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-editar-endereco" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalEndereco"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalEndereco">Endereço</h5>
            </div>
            <div class="modal-body">
                @yield('form-endereco')
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
</div>
