<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Blade and Vite</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1 class="p-4">@yield('page.title')</h1>
    </header>
    <main>
        @yield('page.main')
    </main>
    <footer>
        <small><center>Classe 89 | Boolean</center></small>
    </footer>
</body>
</html>
