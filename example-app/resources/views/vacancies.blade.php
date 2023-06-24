<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atomize - вакансии</title>
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body class="antialiased">
        @include ('layouts/header')

        <h1>Вакансии</h1>

        @include ('layouts/footer')
    </body>
</html>
