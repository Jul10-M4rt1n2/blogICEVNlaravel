@extends('layouts.app')

@section('title')
    pagina de timeline cronograma do site
@endsection

@section('content')
    <div id="timeline" class="container-fluid py-5 bg-warning">
        <div class="col-12 py-5">
            <div class="row">
                <div class="title w-25 bg-white">
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
                            <tr>
                                <th>Horário Inicial</th>
                                <th>Horário Término</th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                            <!--tabela com as linhas de horarios-->
                            <tr>
                                <td>09:00:00</td>
                                <td>10:30:00</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>Oracao</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>Encontro de jovens</td>
                                <td>Culto da Família</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
