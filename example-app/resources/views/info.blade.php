<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atomize - раскрытие информации</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="page__body">
        @include ('layouts/header')

        <h1 class="visually-hidden">Раскрытие информации</h1>
        <section class="banner">
            <div class="banner__wrapper">
                <a class="banner__logo" href="/">
                    <picture>
                        <source type="image/webp" srcset="img/logo-white-big.webp 1x, img/logo-white-big-@2x.webp 2x">
                        <img class="promo__img" src="img/logo-white-big.png" srcset="img/logo-white-big-@2x.png 2x" width="413" height="74" alt="Логотип Atomize"/>
                    </picture>
                </a>
                <p class="banner__title">
                    Раскрытие информации
                </p>
                <p class="banner__text">
                    Инфо
                </p>
                <button class="banner__btn-arrow">
                    <svg width="18" height="40">
                        <use xlink:href="{{ asset('sprite.svg#icon-arrow') }}"></use>
                    </svg>
                </button>
            </div>
        </section>

        <p>Content</p>

        @include ('layouts/footer')
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
