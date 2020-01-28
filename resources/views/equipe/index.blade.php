@extends('templates.layout')

@section('conteudo')
    <h1 class="display-4">Colaboradores</h1>
    <hr>
    <div class="accordion" id="accordion">
        @foreach($colaboradores->unique('ano') as $ano)
            <div class="card">
                <div class="card-header p-1" id="header-{{$ano->ano}}">
                    <h2 class="mb-0">
                        <button class="btn btn-light" type="button" data-toggle="collapse"
                                data-target="#collapse-{{$ano->ano}}"
                                aria-expanded="true" aria-controls="collapse-{{$ano->ano}}">
                            <i class="fas fa-chevron-circle-down"></i>
                            {{$ano->ano}}
                        </button>
                    </h2>
                </div>
                {{--                aqui começa o accordion interno--}}
                <div id="collapse-{{$ano->ano}}" class="collapse" aria-labelledby="header-{{$ano->ano}}"
                     data-parent="#accordion">
                    <div class="card-body">
                        @foreach($colaboradores->unique('disciplina') as $disciplina)
                            <div class="accordion" id="{{$disciplina->disciplina}}-{{$ano->ano}}">
                                <div class="card">
                                    <div class="card-header p-1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-light" type="button" data-toggle="collapse"
                                                    data-target="#collapse-{{$disciplina->disciplina}}-{{$ano->ano}}"
                                                    aria-expanded="true"
                                                    aria-controls="collapse-{{$disciplina->disciplina}}-{{$ano->ano}}">
                                                <i class="fas fa-chevron-circle-down"></i>
                                                {{$disciplina->disciplina}}
                                            </button>
                                        </h2>
                                    </div>
                                    <div class="collapse" id="collapse-{{$disciplina->disciplina}}-{{$ano->ano}}"
                                         data-parent="#collapse-{{$ano->ano}}">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                @foreach($colaboradores->where('disciplina', $disciplina->disciplina)->all() as $colaborador)
                                                    <li class="list-group-item item-lista-colaboradores">{{$colaborador->nome}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
