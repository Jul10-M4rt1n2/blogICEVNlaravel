@extends('layouts.app')

@section('title')
    Formulário de cadastro / edicao do conteúdo da pagina Quem Somos
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form
                    action="{{ (!empty($data)) ? route('painel-whoweare-update', $data->id) : route('painel-whoweare-store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($data))
                        @method('PUT')
                    @endif
                    <h1>Formulário de cadastro / edicao do conteúdo da pagina Quem Somos</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    {{-- <div class="form-group">
                                        <!--titulo title-->
                                        <label for="title">Título da pagina Quem Somos</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $data->title ?? old('title') }}">
                                        @error('title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group">
                                        <!--titulo subtitle-->
                                        <label for="subtitle">Subtítulo</label>
                                        <input type="text" name="subtitle" id="subtitle" class="form-control"
                                            value="{{ $data->subtitle ?? old('subtitle') }}">
                                        @error('subtitle')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--resumo summary-->
                                        <label for="description">Resumo</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control editor">{{ $data->description ?? old('description') }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--resumo summary-->
                                        <label for="icon">Icone do subtitulo</label>
                                        <input type="text" name="icon" id="icon" class="form-control"
                                            value="{{ $data->icon ?? old('icon') }}">
                                        @error('icon')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel.whoweare') }}" class="btn btn-danger">Voltar</a>
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
