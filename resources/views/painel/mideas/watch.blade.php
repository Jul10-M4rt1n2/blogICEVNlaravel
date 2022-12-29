@extends('layouts.app')

@section('title')
    Pagina detalhes do video vinda da API do YouTube
@endsection

@section('content')
    <section class="bg-black" style="margin-top: 6%; margin-left: 25%;">
        <div class="container my-5 py-2"></div>
        <div class="title text-center m-auto">
            <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no YouTube</h1>
        </div>
        @foreach ($video->items as $item)
            {{-- @dd($item) --}}
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4 border-0">
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ $item->id->videoId }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->snippet->title }}</h5>
                            </div>
                            <div class="card-footer text-muted">
                                Publicado em {{ date('d M Y', strtotime($item->snippet->publishedAt)) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
