<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Learing')</title>
</head>
<body>
    @yield('content')
<footer>
    <p>&copy; Copyright {{date('Y')}}. Tous droits reservés. <a href="/apropos">Apropos</a></p>
</footer>
</body>
</html>
