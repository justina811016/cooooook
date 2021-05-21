<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.loading.min.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>
    <body>
        <div class="wrapper d-flex align-items-stretch">
        @if(Auth::check())
            @include('sections.sidebar')
        @endif

        @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/jquery.loading.min.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
