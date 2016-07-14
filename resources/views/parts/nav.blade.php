<nav class="main-nav">
    <ul class="main-nav__list">
        <li class="main-nav__item {{ $active == 'index' ? 'main-nav__item--active' : '' }}"><a href="/" class="main-nav__link">Обо мне</a></li>
        <li class="main-nav__item {{ $active == 'portfolio' ? 'main-nav__item--active' : '' }}"><a href="/portfolio" class="main-nav__link">Мои работы</a></li>
        <li class="main-nav__item {{ $active == 'contacts' ? 'main-nav__item--active' : '' }}"><a href="/contacts" class="main-nav__link">Связаться со мной</a></li>
    </ul>
</nav>