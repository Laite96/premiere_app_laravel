<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Learing</title>
    </head>
    <body>
        <h1>Salut! Je suis Laite Yagami je viens de la Guinée</h1>
        <p>Il est {{date('H:i A')}} à Conakry</p>
        <footer>
            <p>&copy; Copyright {{date('Y')}}. Tous droits reservés. <a href="#">Apropos</a></p>
        </footer>
    </body>
</html>
