@extends('layouts.app')

@section('title')
    pagina de detalhes do livro
@endsection

@section('content')
    <div class="books_magazine" style="background: url('{{ asset($registro->image1) }}'); height:110vh; margin-top:7%">
        <div class="col-12">
            <div class="container my-5 py-5">
                <div class="title_subtitle my-2">
                    <h1 class="text-white">{{ $registro->title }}</h1>
                    <h2 class="text-white">{{ $registro->subtitle }}</h2>
                </div>
                <div class="app_books_magazine" style="height: 65vh;">
                    <iframe src="{{ asset($registro->pdf) }}" width="100%" height="100%" frameborder="0">
                    </iframe>
                </div>
                <div class="resoumer my-2">
                    <p class="text-white">{{ $registro->summary }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
