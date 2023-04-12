@extends('layouts.app')

@section('title')
    Formulário de cadastro / edicao da pagina Encontro de Jovens
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form
                    action="{{ isset($data) ? route('painel-young-update', $data->id) : route('painel-young-store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($data))
                        @method('PUT')
                    @endif
                    <h1>Formulário de cadastro / edicao da pagina Encontro de Jovens</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--upload de imagem-->
                                        <label for="img">Imagem</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                        @error('img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!--Descricao da atividade referente ao dia da semana-->
                                        <label for="description">Texto</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control editor">{{ $data->description ?? old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel.young') }}" class="btn btn-danger">Voltar</a>
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
