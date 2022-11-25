@extends('layouts.app')

@section('title')
    pagina de timeline cronograma do site
@endsection

@section('content')
    <div id="timeline" class="container-fluid py-5 bg-warning">
        <div class="col-12 py-5">
            <div class="row">
                <div class="title title-mobile w-25 bg-white">
                    <h1>Programações</h1>
                </div>
            </div>
        </div>
        <!--tabela com as colunas horario e dias da semana-->
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Horário Inicial</th>
                                    <th>Horário Término</th>
                                    <th>Data</th>
                                    <th>Dia da semana</th>
                                    <th>Descricao</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--verificando se a tabela esta vazia e exibindo a mensagem Nenhum registro encontrado-->
                                @if (!$registros->isEmpty())
                                    @foreach ($registros as $item)
                                        <tr>
                                            <td>{{ $item->start_time }}</td>
                                            <td>{{ $item->end_time }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->day }}</td>
                                            <td>{{ $item->description }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <div class="alert alert-warning mb-0" role="alert">
                                                Nenhum registro encontrado
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
