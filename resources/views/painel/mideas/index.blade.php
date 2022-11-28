@extends('layouts.app')

@section('title')
    Pagina de mideas vinda da API do Instagram
@endsection

@section('content')
    <div class="container my-5 py-2"></div>
    <div class="title text-center m-auto">
        <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no Instagram</h1>
    </div>
    <div class="col-12 py-5">
        <div class="container">
            <div id="instafeed" class="row m-auto mobile-version-cards">
            </div>
        </div>
    </div>
    <div class="title text-center m-auto">
        <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no YouTube</h1>
    </div>
@endsection
