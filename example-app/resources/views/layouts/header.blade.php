<header class="page-header">
    <div class="container">
        <div class="page-header__wrapper">
            <div class="page-header__wrapper-short">
                <a class="page-header__logo" href="/">
                    <picture>
                        <source type="image/webp" srcset="img/logo-white-small.webp">
                        <img class="img-logo" src="{{ asset('img/logo-white-small.png') }}" width="223" height="40" alt="Логотип Atomize" />
                    </picture>
                </a>
                <button class="page-header__burger burger burger-menu-off">
                    <span class="burger__icon-burger">
                        <span class="burger__element"></span>
                        <span class="burger__element"></span>
                        <span class="burger__element"></span>
                    </span>
                    <span class="burger__icon-close">
                        <svg width="32" height="32">
                            <use xlink:href="{{ asset('sprite.svg#icon-close') }}"></use>
                        </svg>
                    </span>
                </button>
            </div>
            <nav class="page-header__site-navigation site-navigation site-navigation--off">
                <ul class="site-navigation__list nav-list">
                    <li class="nav-list__item">
                        @if(request()->is('corporative-clients'))
                            <a class="nav-list__link nav-list__link--active" href="/corporative-clients">Корпоративным клиентам</a>
                        @else
                            <a class="nav-list__link" href="/corporative-clients">Корпоративным клиентам</a>
                        @endif
                    </li>
                    <li class="nav-list__item">
                        @if(request()->is('private-clients'))
                            <a class="nav-list__link nav-list__link--active" href="/private-clients">Частным клиентам</a>
                        @else
                            <a class="nav-list__link" href="/private-clients">Частным клиентам</a>
                        @endif
                    </li>
                    <li class="nav-list__item">
                        @if(request()->is('company'))
                            <a class="nav-list__link nav-list__link--active" href="/company">Компания</a>
                        @else
                            <a class="nav-list__link" href="/company">Компания</a>
                        @endif
                    </li>
                    <li class="nav-list__item">
                        @if(request()->is('news'))
                            <a class="nav-list__link nav-list__link--active" href="/news">Новости</a>
                        @else
                            <a class="nav-list__link" href="/news">Новости</a>
                        @endif
                    </li>
                    <li class="nav-list__item">
                        <a class="nav-list__link nav-list__link--support" href="/support">Поддержка</a>
                    </li>
                    <li class="nav-list__item nav-list__link--other other-block">
                        <button class="other-block__link nav-list__link">Ещё</button>
                        <div class="other-block__dropdown">
                            <a class="other-block__link-dropdown" href="/corporative-clients">Корпоративным клиентам</a>
                            <a class="other-block__link-dropdown" href="/private-clients">Частным клиентам</a>
                            <a class="other-block__link-dropdown" href="/company">Компания</a>
                            <a class="other-block__link-dropdown" href="/news">Новости</a>
                        </div>
                    </li>
                </ul>
                <div class="site-navigation__lang">
                    <button class="site-navigation__lang-btn site-navigation__lang-btn--active">рус</button>
                    <button class="site-navigation__lang-btn">eng</button>
                </div>
            </nav>
        </div>
    </div>
</header>
