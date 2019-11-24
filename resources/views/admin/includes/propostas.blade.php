@section('form-proposta')
<form method="POST" action="" name="cad_proposta">
    <div class="form-row">
        <div class="col-md-6">
            <label for="validade">Validade</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input type="date" class="form-control" id="validade" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="plano_max">Plano máximo</label>
            <div class="input-group">
                <input type="number" class="form-control" id="plano_max" step="1" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="entrada_minima">Entrada mínima</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-money-bill"></i></span>
                </div>
                <input type="number" class="form-control" id="entrada_minima" min="0" step="0.01" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="parcela_minima">Parcela mínima</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-money-bill"></i></span>
                </div>
                <input type="number" class="form-control" id="parcela_minima" min="0" step="0.01" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="quitacao">Valor quitação</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-money-bill"></i></span>
                </div>
                <input type="number" class="form-control" id="quitacao" min="0" step="0.01" required>
            </div>
        </div>
    </div>
</form>
@endsection
<table class="table table-hover table-sm table-responsive">
    <thead>
        <th>Ação</th>
        <th>Validade</th>
        <th>Plano máximo</th>
        <th>Entrada mínima</th>
        <th>Parcela mínima</th>
        <th>Valor quitação</th>
        <th>Inclusão</th>
        <th>Responsável</th>
    </thead>
    @php($i = 2)
    @foreach ($propostas as $proposta)
    @php($i++)
    <tbody>
        <tr style="cursor: pointer;" class="clickable" data-toggle="collapse" data-target="#group-of-rows-{{ $i }}"
            aria-expanded="false" aria-controls="group-of-rows-{{ $i }}">
            <td>
                <i class="fa fa-plus tooltip-test" aria-hidden="false" title="Ver ofertas"></i>&nbsp;
                <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm" data-toggle="modal"
                    data-target="#modal-editar-proposta">
                    <i class="fa fa-edit fa-lg tooltip-test" title="Editar"></i>&nbsp;
                </button>
                <button type="button" class="ht-tm-element btn btn-outline-dark btn-sm"><i
                        class="fa fa-trash fa-lg tooltip-test" data-toggle="modal" title="Excluir">&nbsp;</i>
                </button>
            </td>
            <td>{{ $proposta['validade'] }}</td>
            <td>{{ $proposta['plano_max'] }}</td>
            <td>{{ $proposta['entrada_minima'] }}</td>
            <td>{{ $proposta['parcela_minima'] }}</td>
            <td>{{ $proposta['quitacao'] }}</td>
            <td>{{ $proposta['inclusao'] }}</td>
            <td>{{ $proposta['responsavel'] }}</td>
        </tr>
    </tbody>
    <tbody class="collapse" id="group-of-rows-{{ $i }}">
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
            <td>data {{ $i }}</td>
            <td>data {{ $i }}</td>
            <td>data {{ $i }}</td>
        </tr>
        <tr>
            <td>- child row</td>
            <td>data {{ $i }}</td>
            <td>data {{ $i }}</td>
            <td>data {{ $i }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
<div id="modal-editar-proposta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalProposta"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalProposta">Proposta</h5>
            </div>
            <div class="modal-body">
                @yield('form-proposta')
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
