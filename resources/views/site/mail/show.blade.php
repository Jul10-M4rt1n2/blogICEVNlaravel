@component('vendor.mail.html.message')


    @slot('header')
        @component('vendor.mail.html.header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

        {{ $data['description'] }}        
    
    @component('vendor.mail.html.button', ['url' => 'https://laravel.com/docs/9.x/notifications#customizing-the-subject'])
    
        @lang('Clique aqui para acessar o site')

    @endcomponent


    @slot('footer')

        @component('vendor.mail.html.footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos os direitos reservados.')
        @endcomponent

    @endslot

@endcomponent
