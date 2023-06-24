<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atomize - раскрытие информации</title>
        <link rel="stylesheet" href="{{ asset(css/app.css) }}">

    </head>
    <body class="antialiased">
        @include ('layouts/header')

        <h1>Раскрытие информации</h1>

        @include ('layouts/footer')
    </body>
</html>
