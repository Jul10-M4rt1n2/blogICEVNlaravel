@extends('layouts.app')

@section('title')
    pagina de detalhes do livro
@endsection

@section('content')
    <div class="books_magazine">
        <div class="col-12">
            <div class="container my-5 py-5">
                <div class="app_books_magazine" style="height: 65vh;">
                    <!--iframe para carregar o livro ou revista no tamanho total da tela-->
                    <iframe src="{{ asset('assets/books/livro-php.pdf') }}" width="100%" height="100%"
                        frameborder="0"></iframe>
                    {{-- <iframe src="{{ asset('storage/'.$book->file) }}" width="100%" height="100%" frameborder="0"></iframe> --}}
                </div>
                <div class="title_subtitle">
                    <h1>Titulo do livro ou revista</h1>
                    <h2>Subtitulo do livro ou revista</h2>
                    {{-- <h1>{{ $book->title }}</h1>
                    <h2>{{ $book->subtitle }}</h2> --}}
                </div>
                <div class="resoumer">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse asperiores delectus libero.
                        Consequatur, esse vitae quo error temporibus ipsa natus facilis sit eius eligendi, eveniet ullam
                        inventore enim delectus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        asperiores delectus libero.
                        Consequatur, esse vitae quo error temporibus ipsa natus facilis sit eius eligendi, eveniet ullam
                        inventore enim delectus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        asperiores delectus libero.
                        Consequatur, esse vitae quo error temporibus ipsa natus facilis sit eius eligendi, eveniet ullam
                        inventore enim delectus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        asperiores delectus libero.
                        Consequatur, esse vitae quo error temporibus ipsa natus facilis sit eius eligendi, eveniet ullam
                        inventore enim delectus fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        asperiores delectus libero.
                        Consequatur, esse vitae quo error temporibus ipsa natus facilis sit eius eligendi, eveniet ullam
                        inventore enim delectus fuga.
                    </p>
                    {{-- <p>{{ $book->resoumer }}</p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
