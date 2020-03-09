<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AppPastel') }} - @yield('titulo-pagina') </title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @stack('style')

    </head>
    <body>
        <div id="app">
            @include('includes/menu')
        
            <div class="content">
                @yield('context')
            </div>
        </div>
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @stack('script')
    </body>
</html>
