@extends('layouts.app')

@section('title')
    Formulário de cadastro / edicao de itens da pagina programacoes
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form
                    action="{{ isset($data) ? route('painel-timeline-update', $data->id) : route('painel-timeline-store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($data))
                        @method('PUT')
                    @endif
                    <h1>Formulário de cadastro / edicao de itens da pagina programacoes</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--Horairo de inicio da atividade-->
                                        <label for="start_time">Horario de inicio da atividade</label>
                                        <input type="text" name="start_time" id="start_time" class="form-control"
                                            value="{{ $data->start_time ?? old('start_time') }}">
                                        @error('start_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!--Horario de termino da atividade-->
                                        <label for="end_time">Horario de termino da atividade</label>
                                        <input type="text" name="end_time" id="end_time" class="form-control"
                                            value="{{ $data->end_time ?? old('end_time') }}">
                                        @error('end_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--Select correspondente ao dia da semana da atilvidade-->
                                        <label for="day">Dia da semana</label>
                                        <select name="day" id="day" class="form-control">
                                            <option value="Segunda-feira"
                                                {{ isset($data) && $data->day == 'Segunda-feira' ? 'selected' : '' }}>
                                                Segunda-feira</option>
                                            <option value="Terça-feira"
                                                {{ isset($data) && $data->day == 'Terça-feira' ? 'selected' : '' }}>
                                                Terça-feira</option>
                                            <option value="Quarta-feira"
                                                {{ isset($data) && $data->day == 'Quarta-feira' ? 'selected' : '' }}>
                                                Quarta-feira</option>
                                            <option value="Quinta-feira"
                                                {{ isset($data) && $data->day == 'Quinta-feira' ? 'selected' : '' }}>
                                                Quinta-feira</option>
                                            <option value="Sexta-feira"
                                                {{ isset($data) && $data->day == 'Sexta-feira' ? 'selected' : '' }}>
                                                Sexta-feira</option>
                                            <option value="Sabado"
                                                {{ isset($data) && $data->day == 'Sabado' ? 'selected' : '' }}>Sabado
                                            </option>
                                            <option value="Domingo"
                                                {{ isset($data) && $data->day == 'Domingo' ? 'selected' : '' }}>Domingo
                                            </option>
                                        </select>
                                        @error('day')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                     <div class="form-group">
                                        <!--Dia mes e ano-->
                                        <label for="date">Dia mes e ano</label>
                                        <input type="text" name="date" id="date" class="form-control"
                                            value="{{ $data->date ?? old('date') }}">
                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--Descricao da atividade referente ao dia da semana-->
                                        <label for="description">Descrição da atividade</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $data->description ?? old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel.timeline') }}" class="btn btn-danger">Voltar</a>
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
