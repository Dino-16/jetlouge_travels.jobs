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

    <main class="flex-grow-1 d-flex">
        @yield('content')
    </main>

    {{-- footer --}}
    @include('layouts.includes.footer')

</body>
</html>
