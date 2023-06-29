<footer class="page-footer">
    <ul class="page-footer__navigation nav-list nav-list--footer">
        <li class="nav-list__item">
            @if(request()->is('company'))
                <a class="nav-list__link nav-list__link--active" href="/company">Компания</a>
            @else
                <a class="nav-list__link" href="/company">Компания</a>
            @endif
        </li>
        <li class="nav-list__item">
            @if(request()->is('vacancies'))
                <a class="nav-list__link nav-list__link--active" href="/vacancies">Вакансии</a>
            @else
                <a class="nav-list__link" href="/vacancies">Вакансии</a>
            @endif
        </li>
        <li class="nav-list__item">
            @if(request()->is('contacts'))
                <a class="nav-list__link nav-list__link--active" href="/contacts">Контакты</a>
            @else
                <a class="nav-list__link" href="/contacts">Контакты</a>
            @endif
        </li>
        <li class="nav-list__item">
            @if(request()->is('info'))
                <a class="nav-list__link nav-list__link--active" href="/info">Раскрытие информации</a>
            @else
                <a class="nav-list__link" href="/info">Раскрытие информации</a>
            @endif
        </li>
    </ul>
    <div class="page-footer__info">
        <a class="page-footer__logo-link" href="/">
            <picture>
                <source type="image/webp" srcset="img/logo-white-small.webp">
                <img class="img-logo" src="{{ asset('img/logo-white-small.png') }}" width="223" height="40" alt="Логотип Atomize" />
            </picture>
        </a>
        <p class="page-footer__text">
            Общество с ограниченной ответственностью «АТОМАЙЗ» 1111111, Москва, Пушкина, дом 1, офис 1, этаж 1, Кабинет 1А, ОГРН: 01010101010101.
            Лицензия Банка России № ХХХ от 00.00.0000
        </p>
        <a class="page-footer__link" href="#">Политика конфедициальности</a>
        <p class="page-footer__copyright">2021 © Atomyze </p>
    </div>
</footer>
