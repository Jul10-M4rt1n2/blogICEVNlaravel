<ul class="nav justify-content-end bg-black p-2">
    <li class="nav-item">
        <a class="navbar-brand" href="{{ route('painel') }}">
            <img src="{{ asset('assets/image/logo-ICEVN.png') }}" width="50" alt="Logo"
                class="img-fluid text-white">
        </a>
    </li>
    <li class="nav-item">
        <button class="btn btn-primary bg-black border-0 custom-btn-hamburg" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                class="fa-solid fa-bars"></i></button>
    </li>
</ul>

<div class="offcanvas offcanvas-start show p-3 bg-black sidebar-custom" data-bs-scroll="true" data-bs-backdrop="false"
    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
            <!--logo-->
            <a href="{{ route('painel') }}" class="navbar-brand">
                <img src="{{ asset('assets/image/logo-ICEVN.png') }}" alt="Logo" class="img-fluid text-white">
            </a>
        </h5>
        <button type="button" class="btn-close bg-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!--versiculo inicial-->
        <div class="text-center">
            <p class="text-center text-white">"O Senhor é o meu pastor, nada me faltará." Salmos 23:1</p>
        </div>
        <!--menu e subimenu lista-->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="{{ route('painel-home') }}" class="nav-link text-white"><i class="fa-solid fa-house"></i> Home</a>
                {{-- <a class="nav-link side-nav-link text-white" href="{{ route('painel-home') }}" data-bs-toggle="collapse" aria-expanded="false" aria-controls="section-home">
                    <i class="fa-solid fa-house"></i>
                    <span class="title">Home</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="section-home">
                    <ul>
                        <li>
                            <a href="{{ route('painel-home') }}" class="text-white nav-link">Banner</a>
                        </li>
                        <li>
                            <a href="#" class="text-white nav-link">Section 1</a>
                        </li>
                    </ul>
                </div> --}}
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('painel.books') }}"><i class="fa-solid fa-book"></i> Livros e revistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('painel.timeline') }}"><i class="fa-solid fa-calendar-days"></i> Programacoes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-photo-film"></i> Medeas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-graduation-cap"></i> Estudos
                    bíblicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-circle-exclamation"></i> Quem
                    Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-address-book"></i> Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-volleyball"></i> Encontro de
                    jovens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-heart-pulse"></i> Pedidos de
                    oracao</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Dizimos e
                    ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-users"></i> Perfis</a>
            </li>
        </ul>
    </div>
    <!--perfil logado-->
    <div class="offcanvas-footer">
        <div class="text-center">
            <!--imagem do usuário redonda-->
            <img src="{{ asset('assets/image/julio.jpg') }}" width="40" class="rounded-circle" alt="...">
            <p class="text-center text-white">Olá, Júlio Martins</p>
            <a href="#" class="btn custom-btn-info">Perfil</a>
            <a href="{{ route('logout') }}" class="btn custom-btn-danger">Sair</a>
        </div>
    </div>
</div>
