@extends('layouts.app')

@section('title')
    Pagina de mideas vinda da API do Instagram
@endsection

@section('content')
    <section class="bg-warning bg-gradient" style="margin-top: 6%; margin-left: 25%;">
        <div class="container my-5 py-2"></div>
        <div class="title text-center m-auto">
            <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no Instagram</h1>
        </div>
        <div class="col-12 py-5">
            <div class="container">
                <div id="instafeed" class="row m-auto mobile-version-cards" style="gap: 1rem;">
                </div>
            </div>
        </div>
        <div class="title text-center m-auto">
            <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no YouTube</h1>
        </div>
        <div class="container mt-4">
            <div class="row">
                {{-- @dd($item) --}}
                <div class="col-12">
                    <div class="row">
                        @foreach ($videoLists->items as $item)
                            <div class="col-12 col-md-3 d-block">
                                <a href="{{ Route('site.watch', $item->id->videoId) }}" class="card-link">
                                    <div class="card mb-4 border-0">
                                        <img src="{{ $item->snippet->thumbnails->medium->url }}"
                                            class="img-fluid custom-card-img-effect" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title custom-link text-black">
                                                {{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = '...') }}
                                            </h5>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Publicado em {{ date('d M Y', strtotime($item->snippet->publishTime)) }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
