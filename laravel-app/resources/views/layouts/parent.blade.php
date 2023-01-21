<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ config('app.name') }}</title>
    <!-- vueとかのやつ -->
    <script src="{{ asset('build/js/app.js') }}" defer></script>
    <link href="{{ asset('build/css/app.css') }}" rel="stylesheet">
    <!-- vueとかのやつ -->
</head>
<body id="page-top">
    <div id="app" class="d-flex row  mx-0">
        {{--  side menu  --}}
        <div class="col-2">
            @include('components.menus.side-menu')
        </div>
        {{--  メインコンテンツ  --}}
        <div class="d-flex flex-column col-10">
            <!-- header start -->
            @include('components.menus.header-menu')
            <!-- header end -->
            <!-- main start -->
            <div class="container-fluid">
                @yield('content', View::make('pages.dashboard'))
            </div>
            <!-- main end -->
        </div>
        <div class="d-flex flex-column col-12">
            Footer
        </div>
    </div>
</body>
</html>
