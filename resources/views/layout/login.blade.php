<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <link rel="stylesheet" href="{{ asset('dash/font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/vendor/bootstrap-float-label.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/main.css') }}" /></head>
<body class="background show-spinner no-footer">
<div class="fixed-background"></div>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('dash/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('dash/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dash/js/dore.script.js') }}"></script>
<script src="{{ asset('dash/js/scripts.js') }}"></script></body>
</html>
