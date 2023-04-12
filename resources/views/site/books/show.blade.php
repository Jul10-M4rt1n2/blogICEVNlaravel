@extends('layouts.app')

@section('title')
    pagina de detalhes do livro
@endsection

@section('content')
    <div class="books_magazine container-fluid"
         style="background: url('{{ asset($content[0]) }}'); height:75vh;">
        <div class="col-12">
            <div class="container my-5 py-5 d-flex justify-content-center align-itens-center">
                <div class="title_subtitle my-2">
                    <h1 class="text-white">{{ $flipbook->title }}</h1>
                    <h2 class="text-white">{{ $flipbook->subtitle }}</h2>
                </div>
                <div class="flipbook-viewport">
                    <div class="container">
                        <div class="flipbook">
                            @foreach($content as $page)
                                <div class="image-fluid" style="background-image:url({{ asset($page) }})"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="container my-5 py-5">--}}
            {{--                <div class="title_subtitle my-2">--}}
            {{--                    <h1 class="text-white">{{ $registro->title }}</h1>--}}
            {{--                    <h2 class="text-white">{{ $registro->subtitle }}</h2>--}}
            {{--                </div>--}}
            {{--                <div class="app_books_magazine" style="height: 65vh;">--}}
            {{--                    <iframe src="{{ asset($registro->pdf) }}" width="100%" height="100%" frameborder="0">--}}
            {{--                    </iframe>--}}
            {{--                </div>--}}
            {{--                <div class="resoumer my-2">--}}
            {{--                    <p class="text-white">{{ $registro->summary }}</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('extras/modernizr.2.5.3.min.js') }}"></script>
    <script type="text/javascript">

        function loadApp() {

            // Create the flipbook

            $('.flipbook').turn({
                // Width

                width: 922,

                // Height

                height: 600,

                // Elevation

                elevation: 50,

                // Enable gradients

                gradients: true,

                // Auto center this flipbook

                autoCenter: true

            });
        }

        // Load the HTML4 version if there's not CSS transform

        yepnope({
            test: Modernizr.csstransforms,
            yep: ['{{ asset('lib/turn.js') }}'],
            nope: ['{{ asset('lib/turn.html4.min.js') }}'],
            both: ['{{ asset('css/basic.css') }}'],
            complete: loadApp
        });

    </script>
@endsection
