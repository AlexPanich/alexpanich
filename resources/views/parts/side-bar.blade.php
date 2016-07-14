<aside class="side-bar">
    <div class="side-bar__nav-wrap">
        @include('parts.nav', ['active' => $active])
    </div>
    <div class="side-bar__contacts-wrap">
        <div class="contacts">
            <div class="contacts__title">Контакты</div>
            <ul class="contacts__list">
                <li class="contacts__item contacts__item--email"><a href="mailto:nasada@yandex.ru" class="contacts__link contacts__link--email"><svg class="mail"><use xlink:href="#icon-mail"></use></svg>nasada@yandex.ru</a></li>
                <li class="contacts__item contacts__item--phone"><a href="tel:+79263203017" class="contacts__link contacts__link--phone"><svg class="phone"><use xlink:href="#icon-phone"></use></svg>+7 926 320 30 17</a></li>
                <li class="contacts__item contacts__item--skype"><a href="skype:baks_n4" class="contacts__link contacts__link--skype"><svg class="skype"><use xlink:href="#icon-skype"></use></svg>baks_n4</a></li>
            </ul>
        </div>
    </div>
    <div class="side-bar__social-wrap">
        <div class="social">
            <a href="https://vk.com/id211407570" class="social__btn social__btn--vk"><svg class="vk"><use xlink:href="#icon-vk"></use></svg><span class="social__btn--hidden">Вконтаке</span></a>
            <a href="#" class="social__btn social__btn--twitter"><svg class="twitter"><use xlink:href="#icon-twitter"></use></svg><span class="social__btn--hidden">Твиттер</span></a>
            <a href="#" class="social__btn social__btn--facebook"><svg class="facebook"><use xlink:href="#icon-facebook"></use></svg><span class="social__btn--hidden">Фейсбук</span></a>
            <a href="https://github.com/AlexPanich" class="social__btn social__btn--github"><svg class="github"><use xlink:href="#icon-github"></use></svg><span class="social__btn--hidden">Гитхаб</span></a>
        </div>
    </div>
</aside>