<header class="page-header">
    <div class="page-header__inner">
        <div class="page-header__logo-wrap">
            <a href="/" class="logo">
                <picture>
                    <source media="(min-width: 768px)" srcset="img/my-logo.svg" width="243" height="42">
                    <img src="img/my-logo.svg" alt="Логотип сайта" class="logo__img" width="166" height="29">
                </picture>
                <span class="logo__text logo__text--hidden">Сайт портфолио</span>
            </a>
        </div>
        <div class="page-header__social-wrap">
            <div class="social">
                <a href="https://vk.com/id211407570" class="social__btn social__btn--vk"><svg class="vk"><use xlink:href="#icon-vk"></use></svg><span class="social__btn--hidden">Вконтаке</span></a>
                <a href="#" class="social__btn social__btn--twitter"><svg class="twitter"><use xlink:href="#icon-twitter"></use></svg><span class="social__btn--hidden">Твиттер</span></a>
                <a href="#" class="social__btn social__btn--facebook"><svg class="facebook"><use xlink:href="#icon-facebook"></use></svg><span class="social__btn--hidden">Фейсбук</span></a>
                <a href="https://github.com/AlexPanich" class="social__btn social__btn--github"><svg class="github"><use xlink:href="#icon-github"></use></svg><span class="social__btn--hidden">Гитхаб</span></a>
            </div>
        </div>
        <button class="navbar-toggle" type="button">
            <span class="navbar-toggle__lines"></span>
        </button>
    </div>
    <div class="page-header__menu-wrap">
        @include('parts.nav', ['active' => $active])
    </div>
</header>