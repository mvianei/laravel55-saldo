<div class="shadow p-3 mb-5 bg-white rounded" style="box-shadow: 0 0.5rem 1rem rgba(44, 240, 214,1.15)!important;">
    <div class="col-sm-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">E-mails</h3>
                <div class="form-row">
                    <div class="form-group col-md-auto">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-editar-email">
                            <i class="fa fa-plus"></i> Adicionar
                        </button>
                    </div>
                </div>
            </div>
            @section('form-email')
            <form method="POST" action="" name="cad_email">
                <div class="form-row">
                    <div class="col-md-auto">
                        <label for="tipo_documento_email">Tipo</label>
                        <select class="form-control select2" style="width: 100%;" id="tipo_documento_email">
                            <option selected="selected">Comercial</option>
                            <option>Financeiro</option>
                            <option>Residencial</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="email">E-mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3"><i
                                        class="fa fa-envelope"></i></span>
                            </div>
                            <input type="mail" class="form-control" id="email" required name="email">
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
                                    <th>E-mail</th>
                                    <th>Tipo</th>
                                    <th>Inclusão</th>
                                    <th>Responsável</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                data-toggle="modal" data-target="#modal-editar-email">
                                                <i class="fa fa-edit fa-lg tooltip-test" title="Editar">&nbsp;</i>
                                            </button>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                    class="fa fa-trash fa-lg tooltip-test" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i>
                                            </button>
                                        </td>
                                        <td>mvianei@gmail.com</td>
                                        <td>Comercial</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"
                                                data-toggle="modal" data-target="#modal-editar-email">
                                                <i class="fa fa-edit fa-lg tooltip-test" title="Editar">&nbsp;</i>
                                            </button>
                                            <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"><i
                                                    class="fa fa-trash fa-lg tooltip-test" data-toggle="modal"
                                                    title="Excluir">&nbsp;</i>
                                            </button>
                                        </td>
                                        <td>mvianei@hotmail.com</td>
                                        <td>Financeiro</td>
                                        <td>26/10/2019 12:00:00</td>
                                        <td>Michelangelo</td>
                                    </tr>
                                </tbody>
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
<div id="modal-editar-email" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">E-mail</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @yield('form-email')
                </div>
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
