@extends('layouts.app')

@section('title')
    Pagina de Livros e Revistas
@endsection

@section('content')
    <section id="books">
        <!--Carousel Banner destaques-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            @php
                $j = 0;
            @endphp
            <div class="carousel-indicators">
                <!--indicadores do carousel automaticos de acordo com a quantidade de itens presentes no carousel-->
                @foreach ($registros as $key => $item)
                    <!--limitando a somente 3 botoes-->
                    @if ($j < 3)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $j }}"
                            @php if ($j == 0){echo '" class="active" aria-current="true"';} @endphp>
                        </button>
                    @endif
                    @php
                        $j++;
                    @endphp
                @endforeach
            </div>
            @php
                $i = 0;
            @endphp
            <div class="carousel-inner" style="height: 90vh">
                @if (count($registros) > 0 && count($registros) < 3)
                    @foreach ($registros as $key => $item)
                        <div class="carousel-item @php if ($i == 0){echo'active';} @endphp custom-gradient-dark-2"
                             style="max-height: 90vh">
                            <img src="{{ asset($item->image1) }}" class="d-block w-100" alt="..." style="opacity: 0.3;"
                                 alt="...">
                            <div class="carousel-caption d-none d-md-block"
                                 style="right: 50% !important; left: 2% !important; bottom: 20% !important;">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->subtitle }}</p>
                                <p>{{ Str::limit($item->summary, 350) }}</p>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                @elseif (count($registros) > 3)
                    @foreach ($registros->random(3) as $key => $item)
                        <div class="carousel-item @php if ($i == 0){echo'active';} @endphp custom-gradient-dark-2"
                             style="max-height: 90vh">
                            <img src="{{ asset($item->image1) }}" class="d-block w-100" alt="..." style="opacity: 0.3;"
                                 alt="...">
                            <div class="carousel-caption d-none d-md-block"
                                 style="right: 50% !important; left: 2% !important; bottom: 20% !important;">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->subtitle }}</p>
                                <p>{{ Str::limit($item->summary, 350) }}</p>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                @else
                    <img src="{{ asset('assets/image/banner-livros-revista.jpg') }}" class="d-block w-100"
                         style="opacity: 0.3;" alt="...">
                    <div class="carousel-caption d-none d-md-block"
                         style="right: 50% !important; left: 2% !important; bottom: 35% !important;">
                        <h5>Titulo do livro ou da revista</h5>
                        <h3>Subtitulo do livro ou da revista</h3>
                        <p>Aqui voce verá o resumo do livro, e escolher o que melhor de agradar. Nesta pagina será
                            reunido
                            varios generos literários desde livros e revistas infantis, a livros e revistas para estudo
                            e
                            conhecimento espiritual. Aproveite, pois tudo será disponibilizado gratuitamente pra voce.
                            Informaremos a data de publicacao de conteudos em breve.
                        </p>
                    </div>
                @endif
            </div>
        </div>
        </div>
        <!--Cards de livros com paginacao e botao ver todos-->
        <div class="container my-5">
            <div class="col-12">
                <div class="row">
                    <div class="title my-2">
                        <h2 class="custom-title-italic-2 custom-transition text-black">Livros</h2>
                    </div>
                </div>
                <div class="row">
                    <!--carregar todos os registro de livros do banco de dados sendo somente image2 que é a capa do livro-->
                    {{--                    @if (count($flipbooks) > 0)--}}
                    {{--                        @foreach ($flipbooks as $item)--}}
                    {{--                            <!--verificando se é livro ou revista conforme o select no cadastro-->--}}
                    {{--                            @if ($item)--}}
                    {{--                                <div class="col-12 col-md-3 d-block">--}}
                    {{--                                    <a href="{{ route('books.show', $item->id) }}" class="card-link">--}}
                    {{--                                        <div class="card border border-0 shadow" style="width: 18rem;">--}}
                    {{--                                            <img src="{{ asset(explode(",",$item->content)[0]) }}" class="card-img custom-card-img-effect"--}}
                    {{--                                                alt="...">--}}
                    {{--                                            --}}{{-- <div class="card-body">--}}
                    {{--                                        <h5 class="card-title">Card title</h5>--}}
                    {{--                                        <p class="card-text">Some quick example text to build on the card title and make up the--}}
                    {{--                                            bulk of the card's content.</p>--}}
                    {{--                                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    {{--                                    </div> --}}
                    {{--                                        </div>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            @endif--}}
                    {{--                        @endforeach--}}
                    {{--                    @else--}}
                    {{--                        <div class="col-12 col-md-3 d-block">--}}
                    {{--                            <!--alertar que nao registro registrado--->--}}
                    {{--                            <div class="alert alert-warning" role="alert">--}}
                    {{--                                Nenhum registro encontrado!--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}
                    @if (count($registros) > 0 && count($registros->where('category', 'livro')) > 0)
                        @foreach ($registros as $item)
                            <!--verificando se é livro ou revista conforme o select no cadastro-->
                            @if ($item->category == 'livro')
                                <div class="col-12 col-md-3 d-block">
                                    <a href="{{ route('books.show', $item->id) }}" class="card-link">
                                        <div class="card border border-0 shadow" style="width: 18rem;">
                                            <img src="{{ asset($item->image2) }}"
                                                 class="card-img custom-card-img-effect"
                                                 alt="...">
{{--                                            <div class="card-body">--}}
{{--                                                <h5 class="card-title">Card title</h5>--}}
{{--                                                <p class="card-text">Some quick example text to build on the card title--}}
{{--                                                    and make up the--}}
{{--                                                    bulk of the card's content.</p>--}}
{{--                                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="col-12 col-md-3 d-block">
                            <!--alertar que nao registro registrado--->
                            <div class="alert alert-warning" role="alert">
                                Nenhum registro encontrado!
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="title my-2">
                        <h2 class="custom-title-italic-2 custom-transition text-black">Revistas</h2>
                    </div>
                </div>
                <div class="row">
                    <!--carregar todos os registro de revistas do banco de dados sendo somente image2 que é a capa do livro-->
                    @if (count($registros) > 0 && count($registros->where('category', 'revista')) > 0)
                        @foreach ($registros as $item)
                            <!--verificando se é livro ou revista conforme o select no cadastro-->
                            @if ($item->category == 'revista')
                                <div class="col-12 col-md-3 d-block">
                                    <a href="{{ route('books.show',  $item->id) }}" class="card-link">
                                        <div class="card border border-0 shadow" style="width: 18rem;">
                                            <img src="{{ asset($item->image2) }}"
                                                 class="card-img custom-card-img-effect"
                                                 alt="...">
                                            {{-- <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div> --}}
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="col-12 col-md-3 d-block">
                            <!--alertar que nao registro registrado--->
                            <div class="alert alert-warning" role="alert">
                                Nenhum registro encontrado!
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
