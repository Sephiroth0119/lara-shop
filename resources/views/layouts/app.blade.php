<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Laravel-shop')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css')}}">

    <script src=""></script>
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
            <div class="container">
                @yield('content')
            </div>
        @include('layouts._footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scriptsAfterJs')
</body>
</html>
