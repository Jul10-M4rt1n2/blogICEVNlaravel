@extends('layouts.app')

@section('title')
    Formulário de cadastro / edicao de itens da home page
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form action="{{ isset($data) ? route('painel-home-update', $data->id) : route('painel-home-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($data))
                        @method('PUT')
                    @endif
                    <h1>Formulário de cadastro / edicao de itens da pagina home</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--upload da imagem-->
                                        <label for="image">Imagem de destaque</label>
                                        <input type="file" name="featured_image" id="featured_image" class="form-control">
                                        @error('featured_image')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!--titulo section2-title-->
                                        <label for="section2-title">Título da sessao 2</label>
                                        <input type="text" name="section2_title" id="section2_title" class="form-control" value="{{ $data->section2_title ?? old('section2_title') }}">
                                        @error('section2_title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--descricao section2-description-->
                                        <label for="section2_description">Descrição da sessao 2</label>
                                        <textarea name="section2_description" id="section2_description" cols="30" rows="10" class="form-control editor">{{ $data->section2_description ?? old('section2_description') }}</textarea>
                                        @error('section2_description')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section2-image-->
                                        <label for="section2-image">Imagem da sessao 2</label>
                                        <input type="file" name="section2_image" id="section2_image" class="form-control">
                                        @error('section2_image')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!--titulo section3-title-->
                                        <label for="section3_title">Título da sessao 3</label>
                                        <input type="text" name="section3_title" id="section3_title" class="form-control" value="{{ $data->section3_title ?? old('section3_title') }}">
                                        @error('section3_title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-sub-title-->
                                        <label for="section3_sub_title">Sub titulo da sessao 3</label>
                                        <input type="text" name="section3_sub_title" id="section3_sub_title" class="form-control" value="{{ $data->section3_sub_title ?? old('section3_sub_title') }}">
                                        @error('section3_sub_title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-title-card1-->
                                        <label for="section3_title_card1">Titulo do card 1 da sessao 3</label>
                                        <input type="text" name="section3_title_card1" id="section3_title_card1" class="form-control" value="{{ $data->section3_title_card1 ?? old('section3_title_card1') }}">
                                        @error('section3_title_card1')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-description-card1-->
                                        <label for="section3_description_card1">Descrição do card 1 da sessao 3</label>
                                        <textarea name="section3_description_card1" id="section3_description_card1" cols="30" rows="10" class="form-control editor">{{ $data->section3_description_card1 ?? old('section3_description_card1') }}</textarea>
                                        @error('section3_description_card1')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-title-card2-->
                                        <label for="section3_title_card2">Titulo do card 2 da sessao 3</label>
                                        <input type="text" name="section3_title_card2" id="section3_title_card2" class="form-control" value="{{ $data->section3_title_card2 ?? old('section3_title_card2') }}">
                                        @error('section3_title_card2')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-description-card2-->
                                        <label for="section3_description_card2">Descrição do card 2 da sessao 3</label>
                                        <textarea name="section3_description_card2" id="section3_description_card2" cols="30" rows="10" class="form-control editor">{{ $data->section3_description_card2 ?? old('section3_description_card2') }}</textarea>
                                        @error('section3_description_card2')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-title-card3-->
                                        <label for="section3_title_card3">Titulo do card 3 da sessao 3</label>
                                        <input type="text" name="section3_title_card3" id="section3_title_card3" class="form-control" value="{{ $data->section3_title_card3 ?? old('section3_title_card3') }}">
                                        @error('section3_title_card3')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section3-description-card3-->
                                        <label for="section3_description_card3">Descrição do card 3 da sessao 3</label>
                                        <textarea name="section3_description_card3" id="section3_description_card3" cols="30" rows="10" class="form-control editor">{{ $data->section3_description_card3 ?? old('section3_description_card3') }}</textarea>
                                        @error('section3_description_card3')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!---section4-title-->
                                        <label for="section4_title">Titulo da sessao 4</label>
                                        <input type="text" name="section4_title" id="section4_title" class="form-control" value="{{ $data->section4_title ?? old('section4_title') }}">
                                        @error('section4_title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--section4-description-->
                                        <label for="section4_description">Descrição da sessao 4</label>
                                        <textarea name="section4_description" id="section4_description" cols="30" rows="10" class="form-control editor">{{ $data->section4_description ?? old('section4_description') }}</textarea>
                                        @error('section4_description')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel-home') }}" class="btn btn-danger">Voltar</a>
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
