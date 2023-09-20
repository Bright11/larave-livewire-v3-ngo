<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("css/navbar.css") }}">
    <script src="https://kit.fontawesome.com/0560d0caf7.js" crossorigin="anonymous"></script>
    <script defer src="{{ asset("js/navbarjs.js") }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/slider.css") }}">

    @livewireStyles
</head>
<body>
    @include('frontend.layouts.navbar')
    @yield('content')
@include('frontend.layouts.footer')

    @livewireScripts

<script src="{{ asset("js/jquery.js") }}"></script>
<script src="{{ asset("js/owl.carousel.min.js") }}"></script>

<script src="{{ asset("js/slidersettings.js") }}"></script>

</body>
</html>
