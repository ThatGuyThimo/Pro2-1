<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
            <div class="wrapper">
                <div class="text">
                    <h1>Dit is de homepage
                    </h1>
                    <p>Kaas</p>
                    <a href="{{ url('/#') }}">Dit is een dynamise link</a>
                </div>
            </div>
    </body>
</html>