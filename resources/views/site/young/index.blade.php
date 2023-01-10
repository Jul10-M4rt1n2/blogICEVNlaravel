@extends('layouts.app')

@section('title')
    Pagina Encontro de Jovens
@endsection

@section('content')
    <div class="container contact py-5">
        <div class="col-12 py-5">
            <div class="row">
                <h1 class="title custon-title-form-contact text-center">Encontro de Jovens</h1>
            </div>
            <div class="row">
                @if (!$datas->isEmpty())
                    @foreach ($datas as $item)
                        <div class="col-12 col-md-6 d-block">
                            <img class="img-fluid" width="50%" src="{{ asset($item->image) }}" alt="">
                        </div>
                        <div class="col-12 col-md-6 d-block">
                            <p class="custom-text-paragraph">{{ $item->description }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 col-md-6 d-block">
                        <img class="img-fluid" src="{{ asset('assets/image/banner-oracao.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-6 d-block">
                        <p class="custom-text-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam,
                            voluptatum. Officiis atque, quod perspiciatis maiores dolorem quia blanditiis dolore ducimus
                            aliquam
                            quisquam fugiat quidem accusantium nesciunt velit quas nihil rerum quis molestias! Quibusdam et
                            assumenda perferendis fugiat deserunt, ipsum veniam nam illo laborum cupiditate natus quod
                            provident
                            aliquam rem incidunt earum ratione ipsam ducimus. Architecto alias quo amet temporibus, pariatur
                            similique ex commodi doloribus tenetur, iusto corrupti at aut eveniet corporis optio quis labore
                            esse quos excepturi modi. Asperiores ipsum ad adipisci laborum debitis libero facere. Similique
                            eius
                            vero, architecto excepturi corporis dolores! Dolorem hic officiis quas porro, error consectetur
                            magni beatae temporibus ab harum amet quo exercitationem eos? Praesentium eligendi maiores
                            explicabo
                            iusto eos aut voluptas animi iure voluptatum minus! Pariatur, perferendis quasi. Iusto maiores
                            impedit voluptate quae magni nisi consequuntur aspernatur repellendus, necessitatibus dicta
                            accusamus architecto? Aspernatur perferendis ad, veniam quas totam porro ullam quibusdam aliquid
                            aut! Velit error soluta, recusandae, reprehenderit veritatis commodi esse sit vero illum culpa
                            reiciendis temporibus expedita eaque non quibusdam aliquid dolor doloribus a repellendus
                            necessitatibus quod accusamus sint molestiae? Modi pariatur, reiciendis minima labore sunt eum
                            ipsam, quas at, nulla veritatis facilis cupiditate incidunt dignissimos consequatur maiores.
                            Repellat debitis temporibus accusamus? Autem nihil aperiam nulla natus velit beatae? Molestias
                            animi
                            debitis, esse laudantium, recusandae placeat laborum porro velit mollitia dolores dolorem dolor
                            possimus aut natus, aliquam adipisci est. Voluptates, earum fugiat deserunt repudiandae atque,
                            facere maxime corrupti sapiente possimus nisi debitis impedit inventore repellendus ab illo
                            suscipit
                            in nesciunt quisquam eos rem quo sed? Veniam numquam dolores explicabo, necessitatibus
                            accusantium
                            deserunt est deleniti porro alias provident ad, dolorum, vel aperiam totam reiciendis facilis at
                            eveniet aliquid incidunt blanditiis rem nam veritatis! Placeat minus molestiae libero corrupti
                            explicabo distinctio sequi esse facilis labore sint cupiditate vel, voluptates fugiat molestias
                            voluptatum nesciunt, dolor velit.</p>
                    </div>
                @endif
            </div>
            <div class="row">
                <h1 class="title custon-title-form-contact text-center">Para Mais informacoes</h1>
            </div>
            <div class="row justify-content-center">
                <a class="fs-2 w-auto" style="color:rgb(249, 48, 115);"
                    href="{{ url('https://www.instagram.com/jovensvidanovaemcristo/') }}" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a class="text-danger fs-2 w-auto" href="{{ url('https://www.youtube.com/@ICEVidaNovacuiaba') }}"
                    target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a class="text-success fs-2 w-auto" href="{{ url('https://chat.whatsapp.com/FadjSsn9xjSJttxWig7mkT') }}"
                    target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
            </div>
        </div>
    </div>
@endsection
