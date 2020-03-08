<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'AppPastel') }} - @yield('titulo-pagina') </title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @stack('style')

    </head>
    <body>

        @include('includes/menu')
        
        <div class="content">
            @yield('context')
        </div>
        
        @stack('script')
    </body>
</html>
