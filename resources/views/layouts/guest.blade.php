<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        @if (isset($title))
            <title>{{ $title }}</title>
        @endif
        <link href="{{ asset('css/guestApp.css') }}?t={{ time() }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;300&family=DM+Sans:ital,wght@0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet">
        <script src="{{ asset('js/guestApp.js') }}" defer></script>

        @yield('css')
        <script>
            window.Laravel = {!!json_encode([
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ], JSON_UNESCAPED_UNICODE)!!};
        </script>
    </head>

    <body class="c-app">
        <div id="app">
            <div class="c-wrapper">
                @include('includes.guest.header')
                <div class="c-body">
                    <main class="c-main">
                        @yield('content')
                    </main>
                    @include('includes.guest.footer')
                </div>
            </div>
            @if (session()->get('Message.flash'))
                <!-- <popup-alert :data="{{json_encode(session()->get('Message.flash')[0])}}"></popup-alert> -->
            @endif
            @php
                session()->forget('Message.flash');
            @endphp
        </div>
        <div class="loading-div hidden">
            <div class="loader-img"></div>
        </div>
        @yield('javascript')
    </body>
</html>
