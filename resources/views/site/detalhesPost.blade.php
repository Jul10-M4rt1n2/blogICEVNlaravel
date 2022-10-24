@extends('layouts.app')

@section('title')
    detalhesPost da sessao 3 e de cada section3_title_card1, section3_title_card2, section3_title_card3 e suas descricao
    section_description_card1, section_description_card2, section_description_card3
@endsection

@section('content')
<div class="image-fluid">
    <img src="{{ asset('assets/image/banner-oracao.jpg') }}" alt="banner-destaque do card 1" class="img w-100  custom-gradient"
        style="height: 45rem">
</div>
    <section class="detalhes-do-card container-fluid">
        <div class="container my-5">
            <div class="row">
                <div class="title text-center custom-title-italic-2 custom-transition">
                    @if (!empty($post) && $post != null)
                            <h1 class="card-title custom-title-italic-2 custom-transition text-black">
                                {{ $post->section3_title_card1 }}</h1>
                    @else
                        <h1 class="card-title custom-title-italic-2 custom-transition text-black">Nenhum dado cadastrado no
                            sistema</h1>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="description custom-sub-title-2 custom-transition">
                    @if (!empty($post) && $post != null)
                            <p class="card-text custom-sub-title-2 custom-transition text-black">
                                {{ $post->section3_description_card1 }}</p>
                    @else
                        <p class="card-text custom-sub-title-2 custom-transition text-black">Nenhum dado cadastrado no
                            sistema</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
