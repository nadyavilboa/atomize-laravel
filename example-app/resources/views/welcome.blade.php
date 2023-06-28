<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atomize - главная страница</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="page__body">
        @include ('layouts/header')

        <h1 class="visually-hidden">Главная страница</h1>

        <section class="banner">
            <div class="banner__wrapper">
                <a class="banner__logo" href="/">
                    <picture>
                        <source type="image/webp" srcset="img/logo-white-big.webp 1x, img/logo-white-big-@2x.webp 2x">
                        <img class="promo__img" src="img/logo-white-big.png" srcset="img/logo-white-big-@2x.png 2x" width="413" height="74" alt="Логотип Atomize"/>
                    </picture>
                </a>
                <p class="banner__title">
                    Новые цифровые возможности бизнеса
                </p>
                <p class="banner__text">
                    Открытая площадка для цифровизации активов и процессов
                </p>
                <button class="banner__btn-arrow">
                    <svg width="18" height="40">
                        <use xlink:href="{{ asset('sprite.svg#icon-arrow') }}"></use>
                    </svg>
                </button>
            </div>
        </section>

        <section class="description">
            <div class="description__title">Что такое и кому нужен</div>
            <div class="description__logo">
                <picture>
                    <source type="image/webp" media="(min-width: 1280px)" srcset="img/logo-black-big.webp 1x, img/logo-black-big-@2x.webp 2x">
                    <source type="image/webp" srcset="img/logo-black-small.webp">
                    <source media="(min-width: 1280px)" srcset="img/logo-black-big.png 1x, img/logo-black-big-@2x.png 2x">
                    <img class="promo__img" src="img/logo-black-small.png" width="240" height="43" alt="Логотип Atomize"/>
                </picture>
            </div>
            <p class="description__text">
                Атомайз — открытая  площадка для цифровизации различных активов и процессов на базе технологий распределенных реестров
                в рамках действующего законодательства  (включая, но не ограничиваясь ЦФА).
            </div>
            <div class="description__images-group">
                <svg class="img-chip img" width="407" height="153">
                    <use xlink:href="{{ asset('sprite.svg#chip') }}"></use>
                </svg>
                <svg class="img-letter img" width="310" height="100">
                    <use xlink:href="{{ asset('sprite.svg#letter-m') }}"></use>
                </svg>
                <picture>
                    <source type="image/webp" media="(min-width: 1280px)" srcset="img/cristall-big.webp">
                    <source type="image/webp" srcset="img/cristall-small.webp">
                    <source media="(min-width: 1280px)" srcset="img/cristall-big.png">
                    <img class="img-cristall" src="img/cristall-small.png" width="240" height="240" alt="Кристалл"/>
            </picture>
            </div>
            <ul class="description__list add-list">
                <li class="add-list__item">Банки</li>
                <li class="add-list__item">Брокеры</li>
                <li class="add-list__item">Крупный и средний бизнес</li>
                <li class="add-list__item">Малый и микро бизнес</li>
                <li class="add-list__item">Физические лица</li>
                <li class="add-list__item">Управляющие активами, ПИФы</li>
                <li class="add-list__item">Другие площадки и маркетплейсы</li>
            </ul>
            </div>
        </section>

        @include ('layouts/footer')
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
