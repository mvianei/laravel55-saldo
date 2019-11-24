<div class="shadow p-4 mb-5 bg-white rounded" style="box-shadow: 0 0.5rem 1rem rgba(44, 240, 214,1.15)!important;">
    <h3 class="box-title">Dívidas</h3>
    @section('form-divida')
    <form method="POST" action="" name="cad_pessoa">
        <div class="form-row">
            <div class="col-md-3">
                <label for="tipo_documento_divida">Documento</label>
                <select class="form-control select2" style="width: 100%;" id="tipo_documento_divida" required>
                    <option></option>
                    <option>Boleto</option>
                    <option>Cheque</option>
                    <option>Fatura</option>
                    <option>Protesto</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero" maxlength="100" required>
            </div>
            <div class="col-md-3">
                <label for="vencimento">Vencimento</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" id="vencimento" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="valor">Valor</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-money-bill"></i></span>
                    </div>
                    <input type="number" class="form-control" id="valor" min="1" step="0.01" required>
                </div>
            </div>
        </div>
    </form>
    @endsection
    <main>
        <div class="category list-a" data-collapsible>
            <div class="block" data-collapsible>
                <div class="block__title">
                    <h4>Credor 1</h4>
                </div>
                <div class="block__content">
                    <div class="box-body table-responsive no-padding">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Dívidas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="pill" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Propostas</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <br>
                                <p>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal-editar-divida">
                                        <i class="fa fa-plus"></i> Adicionar
                                    </button>
                                </p>
                                <br>
                                <table class="table table-hover table-sm">
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
                                                <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                    data-toggle="modal" data-target="#modal-editar-divida">
                                                    <i class="fa fa-edit fa-lg tooltip-test" title="Editar">&nbsp;</i>
                                                </button>
                                                <button type="button"
                                                    class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                        class="fa fa-trash fa-lg tooltip-test" data-toggle="modal"
                                                        title="Excluir">&nbsp;</i>
                                                </button>
                                            </td>
                                            <td>26/01/1982</td>
                                            <td>200,00</td>
                                            <td>Fatura</td>
                                            <td>26/10/2019 12:00:00</td>
                                            <td>Michelangelo</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                    data-toggle="modal" data-target="#modal-editar-divida"><i
                                                        class="fa fa-edit fa-lg" title="Editar">&nbsp;</i></button>
                                                <button type="button"
                                                    class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                        class="fa fa-trash fa-lg" data-toggle="modal"
                                                        title="Excluir">&nbsp;</i></button>
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
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="cursor: pointer;" class="clickable" data-toggle="collapse"
                                            data-target="#group-of-rows-1" aria-expanded="false"
                                            aria-controls="group-of-rows-1">
                                            <td><i class="fa fa-plus" aria-hidden="true"></i></td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                        </tr>
                                    </tbody>
                                    <tbody id="group-of-rows-1" class="collapse">
                                        <tr>
                                            <td>- child row</td>
                                            <td>data 1</td>
                                            <td>data 1</td>
                                            <td>data 1</td>
                                        </tr>
                                        <tr>
                                            <td>- child row</td>
                                            <td>data 1</td>
                                            <td>data 1</td>
                                            <td>data 1</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr style="cursor: pointer;" class="clickable" data-toggle="collapse"
                                            data-target="#group-of-rows-2" aria-expanded="false"
                                            aria-controls="group-of-rows-2">
                                            <td><i class="fa fa-plus" aria-hidden="true"></i></td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                        </tr>
                                    </tbody>
                                    <tbody id="group-of-rows-2" class="collapse" style="align-self: center;">
                                        <tr>
                                            <th colspan="4">
                                                OFERTAS
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>tit</th>
                                            <th>tit</th>
                                            <th>tit</th>
                                            <th>tit</th>
                                        </tr>
                                        <tr>
                                            <td>- child row</td>
                                            <td>data 2</td>
                                            <td>data 2</td>
                                            <td>data 2</td>
                                        </tr>
                                        <tr>
                                            <td>- child row</td>
                                            <td>data 2</td>
                                            <td>data 2</td>
                                            <td>data 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block" data-collapsible>
                <div class="block__title">
                    <h4>Credor 2</h4>
                </div>
                <div class="block__content">
                    <div class="box-body table-responsive no-padding">
                        <ul class="nav nav-tabs" id="myTabContent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="credor2-tab" data-toggle="pill" href="#credor2"
                                    role="tab" aria-controls="credor2" aria-selected="true">Dívidas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="credor2-propostas2-tab" data-toggle="pill"
                                    href="#credor2-propostas2" role="tab" aria-controls="profile"
                                    aria-selected="false">Propostas</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="credor2" role="tabpanel"
                                aria-labelledby="credor2-tab">
                                <br>
                                <p>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal-editar-divida">
                                        <i class="fa fa-plus"></i> Adicionar
                                    </button>
                                </p>
                                <br>
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <th>Ação</th>
                                        <th>Vencimento</th>
                                        <th>Valor</th>
                                        <th>Documento</th>
                                        <th>Inclusão</th>
                                        <th>Responsável</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($dividas as $divida)
                                        <tr>
                                            <td>
                                                <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                    data-toggle="modal" data-target="#modal-editar-divida">
                                                    <i class="fa fa-edit fa-lg tooltip-test" title="Editar">&nbsp;</i>
                                                </button>
                                                <button type="button"
                                                    class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                        class="fa fa-trash fa-lg tooltip-test" data-toggle="modal"
                                                        title="Excluir">&nbsp;</i>
                                                </button>
                                            </td>
                                            <td>{{ $divida['vencimento'] }}</td>
                                            <td>{{ $divida['valor'] }}</td>
                                            <td>{{ $divida['documento'] }}</td>
                                            <td>{{ $divida['inclusao'] }}</td>
                                            <td>{{ $divida['responsavel'] }}</td>
                                        </tr>
                                        @endforeach
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
                            <div class="tab-pane fade" id="credor2-propostas2" role="tabpanel"
                                aria-labelledby="credor2-propostas2-tab">
                                <br>
                                <p>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal-editar-proposta">
                                        <i class="fa fa-plus"></i> Adicionar
                                    </button>
                                </p>
                                <br>
                                @include('admin.includes.propostas')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<div id="modal-editar-divida" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalPopoversLabel">Dívida</h5>
            </div>
            <div class="modal-body">
                @yield('form-divida')
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
