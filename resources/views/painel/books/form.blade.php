@extends('layouts.app')

@section('title')
    Formulário de cadastro / edicao de itens da pagina livros e revistas
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form action="{{ isset($data) ? route('painel-books-update', $data->id) : route('painel-books-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($data))
                        @method('PUT')
                    @endif
                    <h1>Formulário de cadastro / edicao de itens da pagina livros e revistas</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--upload do arquivo pdf do livro ou revista-->
                                        <label for="file">Inserir as paginas na sequencia correta</label>
{{--                                        <input type="file" name="file" id="file" class="form-control">--}}
                                        @error('file')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="col-lg-9"><input type="file" name="flip_img[]" placeholder="As imagens do livro" multiple/></div> <!-- varias imagens -->
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <!--titulo title-->
                                        <label for="title">Título do livro ou revista</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ $data->title ?? old('title') }}">
                                        @error('title')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--titulo subtitle-->
                                        <label for="subtitle">Subtítulo do livro ou revista</label>
                                        <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $data->subtitle ?? old('subtitle') }}">
                                        @error('subtitle')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--resumo summary-->
                                        <label for="summary">Resumo do livro ou revista</label>
                                        <textarea name="summary" id="summary" cols="30" rows="10" class="form-control editor">{{ $data->summary ?? old('summary') }}</textarea>
                                        @error('summary')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--imagem de destaque para o banner img_emphasis-->
                                        <label for="img_emphasis">Imagem de destaque para o banner</label>
                                        <input type="file" name="img_emphasis" id="img_emphasis" class="form-control">
                                        @error('img_emphasis')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--imagem de capa de cada card de livros ou revistas img_front_cover-->
                                        <label for="img_front_cover">Imagem de capa de cada card de livros ou revistas</label>
                                        <input type="file" name="img_front_cover" id="img_front_cover" class="form-control">
                                        @error('img_front_cover')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--select de categoria livro e revista category-->
                                        <label for="category">Categoria</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="livro" {{ isset($data) && $data->category == 'livro' ? 'selected' : '' }}>Livro</option>
                                            <option value="revista" {{ isset($data) && $data->category == 'revista' ? 'selected' : '' }}>Revista</option>
                                        </select>
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel.books') }}" class="btn btn-danger">Voltar</a>
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
