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
        {{-- <meta name="csrf_token" value="{{ csrf_token() }}"/> --}}
        @stack('css')
        @vite(['resources/scss/app.scss'])
        
        @livewireStyles
    </head>
    <body>
        <div class="isolate bg-white">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
              <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                  <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#9089FC"></stop>
                    <stop offset="1" stop-color="#FF80B5"></stop>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <x-layouts.menu >
            </x-layouts.menu>
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
        @stack('scripts')
        @vite(['resources/js/app.js','resources/js/te.js'])
    </body>
</html>