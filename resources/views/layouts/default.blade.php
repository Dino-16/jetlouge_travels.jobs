<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Title --}}
    <title>JETLOUGE TRAVELS</title>

    {{-- styles|scripts --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    {{--  header --}}
    @include('layouts.includes.header')

    {{-- mains --}}
    <main class="d-flex align-items-center justify-content-center vh-100 fade-section"
        style="{{ request()->is('about-us') ? 'background-image: url(' . asset('images/bg1.jpg') . '); background-size: cover; background-position: center;' : 'background-color: #D3EFFC;' }}">
        @yield('content')
    </main>

    {{-- first section --}}
    <section class="bg-body-tertiary p-3 fade-section">
            @yield('section-1')
    </section>

    {{-- second section --}}
    <section class="bg-white p-3 fade-section">
            @yield('section-2')
    </section>

    {{-- footer --}}
    @include('layouts.includes.footer')


    {{-- animation --}}
    @include('layouts.includes.animation')
</body>
</html>
