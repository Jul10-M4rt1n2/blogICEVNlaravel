@extends('layouts.app')

@section('title')
    Pagina de Livros e Revistas
@endsection

@section('content')
    <section id="books">
        <!--Carousel Banner destaques-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 90vh">
                <div class="carousel-item custom-gradient-dark-2 active">
                    <img src="{{ asset('assets/image/banner-livros-revista.jpg') }}" class="d-block w-100"
                        style="opacity: 0.3;" alt="...">
                    <div class="carousel-caption d-none d-md-block"
                        style="right: 50% !important; left: 2% !important; bottom: 35% !important;">
                        <h5>Titulo do livro ou da revista</h5>
                        <h3>Subtitulo do livro ou da revista</h3>
                        <p>Aqui voce verá o resumo do livro, e escolher o que melhor de agradar. Nesta pagina será reunido
                            varios generos literários desde livros e revistas infantis, a livros e revistas para estudo e
                            conhecimento espiritual. Aproveite, pois tudo será disponibilizado gratuitamente pra voce.
                            Informaremos a data de publicacao de conteudos em breve.
                        </p>
                    </div>
                </div>
                <div class="carousel-item custom-gradient-dark-2">
                    <img src="{{ asset('assets/image/banner-livros-revista.jpg') }}" class="d-block w-100"
                        style="opacity: 0.3;" alt="...">
                    <div class="carousel-caption d-none d-md-block"
                        style="right: 50% !important; left: 2% !important; bottom: 35% !important;">
                        <h5>Titulo do livro ou da revista</h5>
                        <h3>Subtitulo do livro ou da revista</h3>
                        <p>Aqui voce verá o resumo do livro, e escolher o que melhor de agradar. Nesta pagina será reunido
                            varios generos literários desde livros e revistas infantis, a livros e revistas para estudo e
                            conhecimento espiritual. Aproveite, pois tudo será disponibilizado gratuitamente pra voce.
                            Informaremos a data de publicacao de conteudos em breve.
                        </p>
                    </div>
                </div>
                <div class="carousel-item custom-gradient-dark-2">
                    <img src="{{ asset('assets/image/banner-livros-revista.jpg') }}" class="d-block w-100"
                        style="opacity: 0.3;" alt="...">
                    <div class="carousel-caption d-none d-md-block"
                        style="right: 50% !important; left: 2% !important; bottom: 35% !important;">
                        <h5>Titulo do livro ou da revista</h5>
                        <h3>Subtitulo do livro ou da revista</h3>
                        <p>Aqui voce verá o resumo do livro, e escolher o que melhor de agradar. Nesta pagina será reunido
                            varios generos literários desde livros e revistas infantis, a livros e revistas para estudo e
                            conhecimento espiritual. Aproveite, pois tudo será disponibilizado gratuitamente pra voce.
                            Informaremos a data de publicacao de conteudos em breve.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="{{ route('site.detalhesLivro') }}" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                </div>
                <div class="row">
                    <div class="title my-2">
                        <h2 class="custom-title-italic-2 custom-transition text-black">Revistas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                    <div class="col-12 col-md-3 d-block">
                        <a href="" class="card-link">
                            <div class="card border border-0 shadow" style="width: 18rem;">
                                <img src="{{ asset('assets/image/julio.jpg') }}" class="card-img custom-card-img-effect"
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
                </div>
            </div>
        </div>
    </section>
@endsection
