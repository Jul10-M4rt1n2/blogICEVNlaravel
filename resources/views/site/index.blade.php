@extends('layouts.app')

@section('title')
    Pagina Inicial
@endsection

@section('content')
    <section class="body">
        <div class="img-banner">
            @if (!empty($registros) && count($registros) > 0)
                @foreach ($registros as $iten)
                    <img src="{{ asset($iten->image) }}" alt="banner-destaque" class="img w-100  custom-gradient"
                        style="height: 45rem">
                @endforeach
            @else
                <img src="{{ asset('assets/image/banner-livros-revista.jpg') }}" alt="banner-destaque"
                    class="img w-100  custom-gradient" style="height: 45rem">
            @endif
        </div>
        <div class="container-fluid my-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-8 d-block text-center m-auto">
                        @if (!empty($registros) && count($registros) > 0)
                            @foreach ($registros as $iten)
                                <p class="h4 p-5 custom-title-italic custom-transition">{{ $iten->section2_title }}</p>
                                <p class="h5 custom-sub-title custom-transition">{{ $iten->section2_description }}</p>
                            @endforeach
                        @else
                            <p class="h4 p-5 custom-title-italic custom-transition">Voce pode me dar 5 minutos de sua
                                atencao?
                            </p>
                            <p class="h5 custom-sub-title custom-transition">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Quisquam, quae. Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                            </p>
                        @endif
                    </div>
                    <div class="col-12 col-md-4 d-block">
                        @if (!empty($registros) && count($registros) > 0)
                            @foreach ($registros as $iten)
                                <img src="{{ asset($iten->image2) }}" alt="banner-destaque"
                                    class="img w-100  custom-gradient" style="height: 45rem">
                            @endforeach
                        @else
                            <img src="{{ asset('assets/image/banner-oracao.jpg') }}" alt=""
                                class="img-text w-100 custom-card-img-effect">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-bg-section py-5">
            <div class="container text-center">
                <div class="col-12">
                    <div class="row">
                        @if (!empty($registros) && count($registros) > 0)
                            @foreach ($registros as $iten)
                                <p class="h4 custom-title-italic-2 custom-transition">{{ $iten->section3_title }}</p>
                                <p class="h5 custom-sub-title-2 custom-transition">{{ $iten->section3_sub_title }}</p>
                            @endforeach
                        @else
                            <p class="h4 custom-title-italic-2 custom-transition">Encontros semanais</p>
                            <p class="h5 custom-sub-title-2 custom-transition">voce é nosso convidade mais que especial</p>
                        @endif
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <div class="card custom-bord-card">
                                <div class="card-body custom-bg-section" style="height: 380px; overflow: hidden;">
                                    @if (!empty($registros) && count($registros) > 0)
                                        @foreach ($registros as $iten)
                                            <h5 class="card-title custom-title-italic-2 custom-transition">
                                                {{ $iten->section3_title_card1 }}</h5>
                                            <p class="card-text custom-sub-title-2 custom-transition">
                                                {{ $iten->section3_description_card1 }}</p>
                                        @endforeach
                                    @else
                                        <h5 class="card-title custom-title-italic-2 custom-transition">Culto da Família</h5>
                                        <p class="card-text custom-sub-title-2 custom-transition">Todo domingo das 19 horas
                                            as
                                            20:30 horas. Com uma programacao com
                                            louvor, oracao, salas com professores para seus filhos e uma breve palavra,
                                            porem
                                            edificante. Venha conhecer, voce nao vai se arrepender.</p>
                                    @endif
                                    <a href="{{ route('site.detalhesPost') }}" class="btn custom-btn-success custom-card-img-effect">Ver mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card custom-bord-card">
                                <div class="card-body custom-bg-section" style="height: 380px; overflow: hidden;">
                                    @if (!empty($registros) && count($registros) > 0)
                                        @foreach ($registros as $iten)
                                            <h5 class="card-title custom-title-italic-2 custom-transition">
                                                {{ $iten->section3_title_card2 }}</h5>
                                            <p class="card-text custom-sub-title-2 custom-transition">
                                                {{ $iten->section3_description_card2 }}</p>
                                        @endforeach
                                    @else
                                        <h5 class="card-title custom-title-italic-2 custom-transition">Entudos bíblcos de
                                            quarta-feira (EBQ)</h5>
                                        <p class="card-text custom-sub-title-2 custom-transition">Nao conhece a palavra do
                                            Senhor a fundo? tem vontade de aprender,
                                            mas nao sabe por onde comecar? esta com duvidas e nao sabe quem pode responder?
                                            entao este é o momento a hora e o lugar para fazer as suas perguntas. Toda
                                            quarta-feira as 19:30 horas. Participe!</p>
                                    @endif
                                    <a href="{{ route('site.detalhesPost2') }}" class="btn custom-btn-success custom-card-img-effect">Ver mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card custom-bord-card">
                                <div class="card-body custom-bg-section" style="height: 380px; overflow: hidden;">
                                    @if (!empty($registros) && count($registros) > 0)
                                        @foreach ($registros as $iten)
                                            <h5 class="card-title custom-title-italic-2 custom-transition">
                                                {{ $iten->section3_title_card3 }}</h5>
                                            <p class="card-text custom-sub-title-2 custom-transition">
                                                {{ $iten->section3_description_card3 }}</p>
                                        @endforeach
                                    @else
                                        <h5 class="card-title custom-title-italic-2 custom-transition">Encontro de oracao
                                        </h5>
                                        <p class="card-text custom-sub-title-2 custom-transition">Sabemos que a voz do
                                            senhor
                                            vem por meio da pregacao (romanos
                                            10:17). Mas voce sabia que pode conversas com Deus, enviando uma mensagem e Ele
                                            ti
                                            responde assim que visualiza? Esse é o poder da oracao. Encontros todas
                                            tercas-feiras as 19:30 horas em uma casa bem pertinho de voce. Venha enviar a
                                            sua
                                            mensagem pra Deus.</p>
                                    @endif
                                    <a href="{{ route('site.detalhesPost3') }}" class="btn custom-btn-success custom-card-img-effect">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-bg-img p-5">
            <div class="container text-center">
                <div class="card border-0 p-5 custom-bg-section-2" id="section-worne">
                    <div class="card-body">
                        @if (!empty($registros) && count($registros) > 0)
                            @foreach ($registros as $iten)
                                <h5 class="card-title custom-title-italic-2 custom-transition">
                                    {{ $iten->section4_title }}</h5>
                                <p class="card-text custom-sub-title-2 custom-transition">
                                    {{ $iten->section4_description }}</p>
                            @endforeach
                        @else
                            <h5 class="card-title custom-title-italic-2 custom-transition">Quer saber o que ti espera?</h5>
                            <p class="card-text custom-sub-title-2 custom-transition">Temos um amplo salao com capacidade
                                para
                                300 pessoas, climatizados com boa custica, momentos de louvor com banda ao vivo. Salinhas
                                com
                                professores que ensinan a palavra do Senhor conforme a idade de seus filhos, com maternais,
                                sala
                                para criancas e adolescentes. Um amplo estacionamento fechado com vigilancia e uma recepicao
                                para ti alicar no melhor lugar possovel. Com coltos de no maximo 1 hora e 30 minutos. Se
                                voce
                                estava procurando um lugar com conforto, boa palavra de modo objetivo. Este é o lugar
                                perfeito
                                pra voce e sua familia. Venha fazer parte da familia Vida Nova. Todos os domingos as 19:00
                                horas.
                            </p>
                        @endif
                            <a href="{{ route('site.detalhesPost4') }}" class="btn custom-btn-success custom-card-img-effect">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
