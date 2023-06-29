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

        <section class="digital">
            <article class="digital-world">
                <div class="digital__title">
                    На наших глазах мир
                    <br/> меняется навсегда
                </div>
                <div class="digital__wrapper">
                    <div class="digital-world__img">
                        <picture>
                            <source type="image/webp" srcset="img/digital-bg-1.webp">
                            <img class="digital__img" src="img/digital-bg-1.png" width="300" height="448" alt="Рассвет в горах"/>
                        </picture>
                    </div>
                    <div class="digital__text">
                        <p class="digital__text-item">
                            Наш мир стремительно цифровизируется. Мы общаемся и знакомимся через соцсети, проводим встречи по видео-конференц-связи,
                            записываемся к врачу через Госуслуги. Большинство компаний не первый год проводят проекты цифровой трансформации,
                            оптимизируя внутренние и внешние процессы.
                        </p>
                        <p class="digital__text-item">
                            Сегодня появилась возможность цифровизировать практически любые активы – от товаров до финансовых требований.
                            Выпуск, обращение и погашение цифровых активов проще и выгоднее, чем традиционных.
                            ЦФА – это не только привычные активы в удобной и безопасной цифровой форме, но и выход на новые рынки для эмитентов и инвесторов.
                        </p>
                        <p class="digital__text-item">
                            Эмитентам ЦФА дают возможность более быстро, гибко и выгодно привлекать средства, а инвесторам –
                            новые инструменты для инвестирования и формирования портфеля. Добавленная ценность создается за счет охвата большего
                            количества игроков с обеих сторон, а также благодаря отказу от посредников.
                        </p>
                    </div>
                </div>
            </article>
            <article class="digital-economics">
                <div class="digital__title digital__title--economics">
                    Добро пожаловать в цифровую экономику!
                </div>
                <div class="digital__wrapper digital__wrapper--bottom">
                    <div class="digital__column">
                        <div class="digital__column-header digital__column-header--left">Решения для корпоративных клиентов</div>
                        <div class="digital__column-text">
                            Цифровизируйте финансовые обязательства и цепочки поставок, управляйте дебиторской задолженностью,
                            внедряйте программы долгосрочного стимулирования персонала. Полностью бесшовно и онлайн.
                        </div>
                        <a class="digital__link" href="#">Узнать подробнее</a>
                    </div>
                    <div class="digital__column">
                        <div class="digital__column-header digital__column-header--right">Решения для частных клиентов</div>
                        <div class="digital__column-text">
                            Диверсифицируйте свой инвестиционный портфель: покупайте и продавайте цифровые активы,
                            получайте доход от роста их стоимости и регулярные выплаты, если они предусмотрены.
                        </div>
                        <a class="digital__link" href="#">Узнать подробнее</a>
                    </div>
                </div>
            </article>
            <div class="digital__image-group">
                <svg class="img-chip img" width="740" height="214">
                    <use xlink:href="{{ asset('sprite.svg#chip-big') }}"></use>
                </svg>
                <svg class="img-letter img" width="421" height="103">
                    <use xlink:href="{{ asset('sprite.svg#letter-m-big') }}"></use>
                </svg>
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
            </p>
            <div class="description__wrapper">
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
                    <li class="add-list__item add-list__item--one">Банки</li>
                    <li class="add-list__item add-list__item--two">Брокеры</li>
                    <li class="add-list__item add-list__item--three">Крупный и средний бизнес</li>
                    <li class="add-list__item add-list__item--four">Малый и микро бизнес</li>
                    <li class="add-list__item add-list__item--five">Физические лица</li>
                    <li class="add-list__item add-list__item--six">Управляющие активами, ПИФы</li>
                    <li class="add-list__item add-list__item--seven">Другие площадки и маркетплейсы</li>
                </ul>
            </div>
        </section>

        <section class="advantages">
            <div class="advantages__title">Преимущества</div>
            <div class="advantages__logo">
                <picture>
                    <source type="image/webp" media="(min-width: 1280px)" srcset="img/logo-black-big.webp 1x, img/logo-black-big-@2x.webp 2x">
                    <source type="image/webp" srcset="img/logo-black-small.webp">
                    <source media="(min-width: 1280px)" srcset="img/logo-black-big.png 1x, img/logo-black-big-@2x.png 2x">
                    <img class="promo__img" src="img/logo-black-small.png" width="240" height="43" alt="Логотип Atomize"/>
                </picture>
            </div>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <picture>
                        <source type="image/webp" srcset="img/advantages-1.webp">
                        <img class="advantages__img" src="img/advantages-1.png" width="360" height="230" alt="Озеро в горах"/>
                    </picture>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Удобство</div>
                    <div class="advantages__item-text">
                        Процесс выпуска и обращения цифрового актива на площадке АТОМАЙЗ включает все необходимые шаги в рамках единого бесшовного сервиса
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Выгода</div>
                    <div class="advantages__item-text">
                        Оцифровка активов снижает издержки
                        и позволяет получить дополнительный доход от внедрения новых и улучшения существующих процессов и бизнес- моделей в различных отраслях
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Открытость</div>
                    <div class="advantages__item-text">
                        Возможность стать клиентом площадки есть у любых юридических и физических лиц, прошедших процедуры KYC, KYB, AML
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Рост бизнеса</div>
                    <div class="advantages__item-text">
                        Широкая линейка продуктов, а также возможность дробления активов вплоть до атомизации привлекает
                        на финансовые рынки новых игроков
                    </div>
                </div>
                <div class="advantages__item">
                    <picture>
                        <source type="image/webp" srcset="img/advantages-2.webp">
                        <img class="advantages__img" src="img/advantages-2.png" width="360" height="230" alt="Цветы в поле"/>
                    </picture>
                </div>
                <div class="advantages__item">
                    <picture>
                        <source type="image/webp" srcset="img/advantages-3.webp">
                        <img class="advantages__img" src="img/advantages-3.png" width="360" height="230" alt="Заснеженные горы"/>
                    </picture>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Безопасность</div>
                    <div class="advantages__item-text">
                        Принципы безопасности учтены на самых ранних этапах проектирования системы, что позволило обеспечить максимальную защиту от угроз
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-title">Надежность</div>
                    <div class="advantages__item-text">
                        Площадка подконтрольна Банку России и осуществляет свою деятельность
                        в соответствии с законом от 31.07.2020 № 259-ФЗ
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts-form">
            <div class="contacts-form__title">Форма обратной связи</div>
            <div class="contacts-form__text">
                Подпишитесь на наши новости, чтобы быть в курсе последних продуктов и решений
            </div>
            <form class="form" action="" method="POST" name="contacts-form">
                <input class="contacts-form__input" type="email" name="email" id="email" placeholder="Ваш e-mail" />
                <label class="contacts-form__label">
                    <input class="contacts-form__check visually-hidden" type="checkbox" name="corporative-client" id="corporative-client" />
                    <span class="contacts-form__check-custom"></span>
                    <span class="contacts-form__check-name">Корпоративный клиент</span>
                </label>
                <label class="contacts-form__label">
                    <input class="contacts-form__check visually-hidden" type="checkbox" name="private-client" id="private-client" checked />
                    <span class="contacts-form__check-custom"></span>
                    <span class="contacts-form__check-name">Частный клиент</span>
                </label>
                <label class="contacts-form__label">
                    <input class="contacts-form__check visually-hidden" type="checkbox" name="agreement" id="agreement" checked />
                    <span class="contacts-form__check-custom"></span>
                    <span class="contacts-form__check-name">
                        Согласен на обработку <a class="contacts-form__link" href="#">персональных данных</a>
                    </span>
                </label>
                <button class="contacts-form__btn">Подписаться</button>
            </form>
        </section>

        @include ('layouts/footer')
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
