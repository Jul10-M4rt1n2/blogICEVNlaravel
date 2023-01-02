@extends('layouts.app')

@section('title')
    Pagina de Contato
@endsection

@section('content')
    <div class="container contact py-5">
        <div class="col-12 py-5">
            <div class="row my-5">
                <div class="col-12 col-md-6 d-block">
                    <div class="title">
                        <h1 class="title custon-title-form-contact">Localizacao</h1>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.6242811206632!2d-56.07535033831731!3d-15.618494243482766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939dae29f982ca27%3A0x92c3e7b58028c920!2sIgreja%20Crist%C3%A3%20Evang%C3%A9lica%20Vida%20Nova!5e0!3m2!1spt-BR!2sbr!4v1672326256651!5m2!1spt-BR!2sbr"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="social">
                        <h1 class="title custon-title-form-contact">Siga-nos</h1>
                        <div class="row">
                            <a class="text-blue fs-2 w-auto" href="{{ url('https://www.facebook.com/IgrejavidaNovacba') }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a class="fs-2 w-auto" style="color:rgb(249, 48, 115);" href="{{ url('https://www.instagram.com/icevidanovacuiaba/') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a class="text-danger fs-2 w-auto" href="{{ url('https://www.youtube.com/@ICEVidaNovacuiaba') }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="conrporation">
                        <p class="paragraph">&copy;2023 - Todos os direitos reservados</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-block">
                    <div class="title">
                        <h1 class="title custon-title-form-contact">Contato</h1>
                    </div>
                    <div class="form">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="btn-close" aria-label="Close"></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>                            
                        @endif
                        <form action="{{ route('painel-send-mail') }}" method="post">
                            @csrf
                            <div class="form custom-input-form my-2">
                                <input type="text" name="name" id="name"
                                    placeholder="Digite seu nome e sobre nome">
                            </div>
                            <div class="form custom-input-form my-2">
                                <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form custom-input-form my-2">
                                <textarea name="description" id="description" cols="30" rows="10" placeholder="Digite sua mensagem aqui:"></textarea>
                            </div>
                            <div class="form">
                                <input type="checkbox" name="accept" id="accept">
                                <label for="accept">Aceito receber novidades</label>
                            </div>
                            <div class="btn-form my-2">
                                <button class="btn custom-btn-info" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
