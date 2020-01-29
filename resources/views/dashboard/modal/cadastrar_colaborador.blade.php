<div class="modal fade" id="modalAddColaborador" tabindex="-1" role="dialog"
     aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Novo Colaborador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCadastro" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ano">Ano</label>
                            <input type="number" class="form-control" id="ano" name="ano" min="2020" value={{date("Y")}}>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="area">Área</label>
                            <select class="custom-select" id="area" name="area">
                                @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" form="formCadastro">Salvar</button>
            </div>
        </div>
    </div>
</div>
