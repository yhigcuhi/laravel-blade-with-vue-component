<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
    <!-- vueとかのやつ -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- vueとかのやつ -->
</head>
<body id="page-top">
    <div id="app" class="container d-flex">
        {{--  side menu  --}}
        @include('components.menus.side-menu')
        {{--  メインコンテンツ  --}}
        <div>
            <!-- header start -->
            @include('components.menus.header-menu')
            <!-- header end -->
            <!-- main start -->
            @yield('content', View::make('pages.dashboard'))
            <!-- main end -->
        </div>
    </div>
</body>
</html>
