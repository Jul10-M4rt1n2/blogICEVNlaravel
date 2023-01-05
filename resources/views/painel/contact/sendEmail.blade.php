@extends('layouts.app')

@section('title')
    Formulário de conto para responder a todos os emails
@endsection

@section('content')
    <div class="container py-5" style="margin-left: 25%;">
        <div class="row">
            <div class="col-12">
                <!--se tiverdados exibir usar a rota update se nao usar a rota store-->
                <form action="{{ route('painel-contact-send') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Formulário de conto para responder a todos os emails</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!--resumo summary-->
                                        <label for="description">Texto do corpo do e-mail</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        @error('description')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--input para anexo-->
                                    <div class="form-group">
                                        <label for="attachment">Anexo</label>
                                        <input type="file" name="attachment" id="attachment" class="form-control">
                                        @error('attachment')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--carregar todos os email que aceitam receber novidade ja selecionados-->
                                    <div class="form-group my-2 d-none">
                                        @foreach ($data as $email)
                                            @if ($email->accept == null)
                                                <input type="checkbox" name="email[]" id="email"
                                                    value="{{ $email->email }}" checked>
                                                <label for="email">{{ $email->email }}</label>
                                            @endif
                                        @endforeach
                                        @error('email')
                                            <div class="alert alert-danger mt-2" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--btn voltar e salvar-->
                                    <div class="form-group text-end my-2">
                                        <a href="{{ route('painel.contact') }}" class="btn btn-danger">Voltar</a>
                                        <button type="submit" class="btn btn-success">Enviar</button>
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
