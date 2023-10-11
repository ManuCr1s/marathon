<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARATON MESETA DEL BOM BOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="preloader" class="preloader">
        <div class="d-block">
            <img src="{{asset('assets/img/maraton_2.gif')}}" alt="">
            <p class="text-preloader">C A R G A N D O . . .</p>
        </div>
    </div>
    <header>
        @yield('cabecera')
    </header>
    <main>
        @yield('principal')
    </main>
    <footer>
        @yield('pie')
    </footer>
</body>
</html>