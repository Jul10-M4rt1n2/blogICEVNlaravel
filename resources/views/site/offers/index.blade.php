@extends('layouts.app')

@section('title')
    Pagina de Dizimos e Ofertas
@endsection

@section('content')
    <div class="container contact py-5">
        @if (!$datas->isEmpty())
            @foreach ($datas as $item)
                <div class="col-12 py-5">
                    <div class="row">
                        <h1 class="title custon-title-form-contact text-center">Dizimos e Ofertas</h1>
                    </div>
                    <div class="row">
                        <img class="img-fluid" style="height: 70vh" src="{{ asset($item->image) }}" alt="">
                    </div>
                    <div class="paragraph">
                        <p class="h7">{{ $item->description }}</p>
                    </div>
                </div>
                <div class="row">
                    <h1 class="title custon-title-form-contact text-center text-success"><i class="fa-brands fa-pix"></i>
                        PIX
                    </h1>
                </div>
                <div class="row justify-content-center">
                    <img class="img-fluid w-50" src="{{ asset($item->image2) }}" alt="">
                </div>
            @endforeach
        @else
            <div class="col-12 py-5">
                <div class="row">
                    <h1 class="title custon-title-form-contact text-center">Dizimos e Ofertas</h1>
                </div>
                <div class="row">
                    <img class="img-fluid" style="height: 70vh" src="{{ asset('assets/image/bible-cruz.jpg') }}"
                        alt="">
                </div>
                <div class="paragraph">
                    <p class="h7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maiores nihil, fugit
                        sint
                        distinctio tempora rem placeat et ab quod sequi doloremque ratione voluptate iure. Molestiae
                        perferendis
                        nesciunt omnis commodi mollitia doloremque voluptatem corporis, totam quos exercitationem ipsam
                        voluptates maiores soluta animi velit delectus deserunt sed est illum architecto repellat non? Saepe
                        omnis molestiae aliquam cumque cupiditate pariatur consequuntur, fugit quo provident expedita
                        tempore
                        culpa dicta soluta eius at esse est voluptatibus accusamus architecto recusandae enim, veritatis
                        odit?
                        Itaque adipisci dolores quasi. Veniam, unde culpa assumenda accusantium iusto sequi ut quidem
                        repudiandae voluptatum consequatur officia, explicabo rerum ullam quis! Expedita aperiam
                        voluptatibus
                        voluptas tempora, voluptate recusandae consequuntur ipsam vel quibusdam assumenda, in quos sed
                        deserunt
                        nisi accusantium ipsum ad corporis sunt quis architecto dolore inventore qui! Consequatur itaque
                        necessitatibus iusto fugiat tempora atque laudantium est aliquam ab assumenda tenetur fugit ipsa
                        animi
                        molestiae illo repudiandae quos, placeat, quisquam excepturi alias autem corporis consectetur
                        praesentium nulla! Consectetur dolorem quod laboriosam quo facere sed, aut iste, aperiam officia
                        eveniet
                        fugiat similique voluptates voluptatem qui adipisci molestias eligendi nulla nihil, saepe
                        consequuntur.
                        Expedita labore, eaque nobis cum consectetur nihil eum odio, vitae reprehenderit dolorem recusandae
                        doloremque et unde rem obcaecati ipsum consequatur, maiores quibusdam mollitia quam? Sunt neque
                        autem,
                        totam aut velit expedita modi nostrum quis ipsum repudiandae quo labore omnis rem. Possimus neque
                        aspernatur repudiandae enim explicabo, ratione quam necessitatibus facilis odio laborum, cum ab
                        obcaecati reprehenderit consequatur esse soluta quidem quos? At atque doloribus sequi odit similique
                        consectetur illum quo deleniti ullam eaque modi sapiente aliquid quas molestiae veritatis
                        exercitationem
                        voluptatum, autem dolor voluptates, minus molestias numquam eius quam ab. Sit quia ab unde
                        reiciendis
                        odio optio cupiditate, incidunt, fugiat suscipit dolore qui sunt deleniti illo quam illum
                        accusantium
                        eveniet officia sint dicta? Sit debitis placeat sequi reiciendis consequatur assumenda sed rem in
                        quia
                        laboriosam! Accusamus, vero rem perferendis nemo laborum mollitia neque, atque reiciendis nihil
                        nostrum
                        qui! Odit, deleniti accusantium vero ad, natus unde corrupti necessitatibus nihil est accusamus
                        dicta
                        expedita repudiandae quibusdam rerum non, eaque provident quas molestiae? Suscipit deleniti incidunt
                        enim hic sapiente debitis aut natus iure voluptas.</p>
                </div>
            </div>
            <div class="row">
                <h1 class="title custon-title-form-contact text-center text-success"><i class="fa-brands fa-pix"></i> PIX
                </h1>
            </div>
            <div class="row justify-content-center">
                <img class="img-fluid w-50" src="{{ asset('assets/image/1200px-QR_Code_Example.svg.png') }}" alt="">
            </div>
        @endif
    </div>
@endsection
