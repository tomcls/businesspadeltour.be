<!DOCTYPE html  >
<html lang="{{ str_replace('_', '-', App::currentLocale()) }}-" xmlns:og="http://ogp.me/ns#">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJ8KWLG0VZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZJ8KWLG0VZ');
        </script>
        <title>{{ $title ?? env('APP_NAME') }}</title>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" value="{{ csrf_token() }}"/>
        @vite(['resources/scss/app.scss'])
        
        @livewireStyles
    </head>
    <body>
        {{ $slot }}
        @livewireScripts
        @vite(['resources/js/app.js'])
    </body>
</html>