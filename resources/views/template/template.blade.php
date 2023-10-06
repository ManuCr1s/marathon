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