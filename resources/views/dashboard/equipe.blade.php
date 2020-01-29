@extends('dashboard.layout')

@section('cabecalho')
    Gerenciar Colaboradores
@endsection

@section('conteudo')
    <!--MODAL-->
    <!-- Modal -->
    @include('dashboard.modal.cadastrar_colaborador')
    <!--FIM DO MODAL-->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gerenciar Colaboradores</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-target="#modalAddColaborador"
                    data-toggle="modal">
                <i class="fas fa-user-plus"></i>
                Adicionar colaborador
            </button>
        </div>
    </div>
    <h2>Colaboradores</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Área</th>
                <th>Ano</th>
            </tr>
            </thead>
            <tbody>
            @foreach($colaboradores as $colaborador)
                <tr>
                    <td>{{$colaborador->id}}</td>
                    <td>{{$colaborador->nome}}</td>
                    <td>{{$colaborador->areas()->first()->nome}}</td>
                    <td>{{$colaborador->ano}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function editarSerie(serieId) {
            let formData = new FormData();
            const nome = document
                .querySelector(`#input-nome-serie-${serieId} > input`)
                .value;

            const token = document.querySelector('input[name="_token"]').value;

            formData.append('nome', nome);
            formData.append('_token', token);

            const url = `/series/${serieId}/editaNome`;
            fetch(url, {
                body: formData,
                method: 'POST'
            }).then(() => {
                toggleInput(serieId);
                document.getElementById(`nome-serie-${serieId}`).textContent = nome;
            });
        }
    </script>

@endsection
