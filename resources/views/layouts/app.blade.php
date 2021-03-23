<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="/storage/img/manuela_di_giorgio_terapia.ico">
        <meta name="description" content="Texto para describir lo que haces. ">
        <meta property="og:site_name" content="Manuela Di Giorgio Terapia" />
        <meta content="https://mdgterapia.com/storage/img/manuela_di_giorgio_terapia.png" property="thumbnail" />
        <meta property="og:title" content="Manuela Di Giorgio | Terapia" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://mdgterapia.com" />
        <meta property="og:image" itemprop="image" content="https://mdgterapia.com/storage/img/manuela_di_giorgio_terapia.png"/>
        <meta property="og:image:alt" content="Manuela Di Giorgio Terapia" />
        <meta property="og:image:secure_url" content="https://mdgterapia.com/storage/img/manuela_di_giorgio_terapia.png" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/40c8dc7766.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        {!! NoCaptcha::renderJs() !!}




    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')

         

            <!-- Page Content -->
            <main>
                {{ $slot }}

               
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
