@extends('layouts.app')

@section('title')
    Pagina de mideas vinda da API do Instagram
@endsection

@section('content')
    <div class="container my-5 py-2"></div>
    <div class="title w-25 m-auto">
        <h1 class="h4 p-5 custom-title-italic custom-transition">Estamos no Instagram</h1>
    </div>
    <div id="instafeed">
    </div>
@endsection
