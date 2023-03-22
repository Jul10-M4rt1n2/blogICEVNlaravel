<section id="navbar">
    <nav class="navbar navbar-expand-lg custom-bg-header">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}"><img
                    src="{{ asset('assets/image/logotipo-ICEVN.png') }}" alt=""
                    class="img-logo custom-card-img-effect"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end navMobile" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.books') }}"><i
                                class="fa-solid fa-book"></i> Livros e revistas</a>
                    </li>
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.timeline') }}"><i
                                class="fa-solid fa-calendar-days"></i> Programacoes</a>
                    </li>
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.mideas') }}"><i class="fa-solid fa-photo-film"></i>
                            Mideas</a>
                    </li>
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.studies') }}"><i class="fa-solid fa-graduation-cap"></i>
                            Estudos biblícos</a>
                    </li>
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.whoweare') }}"><i
                                class="fa-solid fa-circle-exclamation"></i> Quem somos</a>
                    </li>
                    <li class="nav-item custom-card-img-effect">
                        <a class="nav-link custom-text-nav" href="{{ route('site.contact') }}"><i class="fa-solid fa-address-book"></i>
                            Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
