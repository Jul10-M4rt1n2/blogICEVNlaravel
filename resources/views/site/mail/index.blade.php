@component('vendor.mail.html.message')


    @slot('header')
        @component('vendor.mail.html.header', ['url' => 'http://blogicevn.tk/'])
            {{ config('app.name') }}
        @endcomponent
    @endslot


    Olá, {{ $data['name'] }}

    Seu e-mail é: {{ $data['email'] }}

    Sua mensagem é: {{ $data['description'] }}

    Agradecemos seu contato. Retornaremos assim que possivel.

    @slot('footer')
        @component('vendor.mail.html.footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos os direitos reservados.')
        @endcomponent
    @endslot

@endcomponent
