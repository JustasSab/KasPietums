<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'KasPietums') }}</title>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/admincss.css') }}" rel="stylesheet">
    </head>

    <body class="xp-vertical">
        <div id="app">
        @include('layouts.top-navbar')

            <!-- Start XP Container -->
            <div id="xp-container">
                <!-- Start XP Leftbar -->
                @include('layouts.left-sidebar')
                <!-- End XP Leftbar -->
                <!-- Start XP Rightbar -->
                <div class="right-content">
                    @yield('admin-rightbar-content')
                </div>
                <!-- End XP Rightbar -->
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/collapsedbar.js') }}" defer></script>
    </body>
</html>
