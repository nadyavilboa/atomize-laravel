require('./bootstrap');

const header = document.querySelector('.page-header');
const burger = header.querySelector('.burger');
const menu = header.querySelector('.site-navigation');
const btnLang = menu.querySelectorAll('.site-navigation__lang-btn');
const otherLink = menu.querySelector('.other-block__link');
const dropDownBlock = menu.querySelector('.other-block__dropdown');
const arrowDown = document.querySelector('.banner__btn-arrow');

const FULL_HEIGHT_PAGE = Math.max(
    document.body.scrollHeight, document.documentElement.scrollHeight,
    document.body.offsetHeight, document.documentElement.offsetHeight,
    document.body.clientHeight, document.documentElement.clientHeight
);

let scrolledFlag = false;

const toggleMenu = () => {
    burger.classList.toggle('burger-menu-off');
    burger.classList.toggle('burger-menu-on');

    menu.classList.toggle('site-navigation--off');
    menu.classList.toggle('site-navigation--on');

    menu.classList.contains('site-navigation--on') ? header.classList.add('page-header--dark') : header.classList.remove('page-header--dark');

    scrolledFlag ? header.classList.add('page-header--dark') : '';

};

const toggleLang = (element) => {
    const activeBtn = element.closest('.site-navigation__lang-btn');

    btnLang.forEach((btn) => btn.classList.remove('site-navigation__lang-btn--active'));

    activeBtn.classList.add('site-navigation__lang-btn--active');
}

const changeHeaderColor = () => {
    const SCROLLED = window.scrollY || document.documentElement.scrollTop;

    SCROLLED > header.offsetHeight ? header.classList.add('page-header--dark') : header.classList.remove('page-header--dark');
    scrolledFlag = SCROLLED > header.offsetHeight;
}

const scrollDown = () => {
    window.scrollTo(0, FULL_HEIGHT_PAGE);
}

burger.addEventListener('click', toggleMenu);

btnLang.forEach((btn) => btn.addEventListener('click', (evt) => toggleLang(evt.target)));

window.addEventListener('scroll', () => changeHeaderColor());

changeHeaderColor();

otherLink.addEventListener('click', () => dropDownBlock.classList.toggle('other-block__dropdown--open'));

arrowDown.addEventListener('click', scrollDown);
