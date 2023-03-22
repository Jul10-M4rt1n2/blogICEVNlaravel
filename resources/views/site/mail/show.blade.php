@component('vendor.mail.html.message')

    @slot('header')
        @component('vendor.mail.html.header', ['url' => 'http://blogicevn.tk/'])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{ $data['description'] }}

    @component('vendor.mail.html.button', ['url' => 'http://blogicevn.tk/'])

        @lang('Clique aqui para acessar o site')

    @endcomponent


    @slot('footer')

        @component('vendor.mail.html.footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos os direitos reservados.')
        @endcomponent

    @endslot

@endcomponent
