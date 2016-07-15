@extends('layouts.master')

@section('title')
    Главная страница
@endsection

@section('content')
    @include('parts.header', ['active' => 'index'])

    <div class="page-content">
        <div class="page-content__inner">
            <main class="main-content">
                <div class="main-content__inner">
                    <article class="basic-information">
                        <header class="basic-information__title">Основная информация</header>
                        <div class="basic-information__content">
                            <div class="basic-information__avatar-wrap">
                                <div class="avatar">
                                    <picture>
                                        <source media="(min-width: 1200px)" srcset="img/avatar.jpg">
                                        <source media="(min-width: 768px)" srcset="img/avatar.jpg">
                                        <img src="img/avatar.jpg" alt="Моя фотография" class="avatar__img">
                                    </picture>
                                </div>
                            </div>
                            <dl class="basic-information__list">
                                <dt class="basic-information__name">Меня зовут:</dt>
                                <dd class="basic-information__desc">Паниченко Александр Сергеевич</dd>
                                <dt class="basic-information__name">Мой возраст:</dt>
                                <dd class="basic-information__desc">33 года</dd>
                                <dt class="basic-information__name">Мой город:</dt>
                                <dd class="basic-information__desc">Пушкино, Московская область</dd>
                                <dt class="basic-information__name">Моя специализация:</dt>
                                <dd class="basic-information__desc">BACKEND Разработчик</dd>
                                <dt class="basic-information__name">Ключевые навыки:</dt>
                                <dd class="basic-information__desc">
                                    <span class="skills">html</span>
                                    <span class="skills">bem</span>
                                    <span class="skills">css</span>
                                    <span class="skills">sass</span>
                                    <span class="skills">javascript</span>
                                    <span class="skills">vuejs</span>
                                    <span class="skills">php</span>
                                    <span class="skills">laravel</span>
                                    <span class="skills">mysql</span>
                                    <span class="skills">postgres</span>
                                </dd>
                            </dl>
                        </div>
                    </article>
                    <article class="experience">
                        <header class="experience__title">Опыт работы</header>
                        <ul class="experience__list">
                            <li class="experience__item experience__item--web">
                                <span class="experience__item-name">Web-мастер</span>
                                <span class="experience__item-time">июнь 2015 - апрель 2016</span>
                            </li>
                            <li class="experience__item experience__item--e-commerce">
                                <span class="experience__item-name">Индивидуальный предприниматель</span>
                                <span class="experience__item-time">октябрь 2013 - апрель 2015</span>
                            </li>
                            <li class="experience__item experience__item--mosoblgaz">
                                <span class="experience__item-name">ГУП МО "Мособлгаз" - инженер</span>
                                <span class="experience__item-time">февраль 2009 - июнь 2013</span>
                            </li>
                            <li class="experience__item experience__item--army">
                                <span class="experience__item-name">Служба в армии</span>
                                <span class="experience__item-time">ноябрь 2006 - ноябрь 2008</span>
                            </li>
                            <li class="experience__item experience__item--ktrv">
                                <span class="experience__item-name">ОАО "Корпорация "Тактическое ракетное вооружиен" - инженер</span>
                                <span class="experience__item-time">август 2005 - ноябрь 2006</span>
                            </li>
                        </ul>
                    </article>
                    <article class="education">
                        <header class="education__title">Образование</header>
                        <ul class="education__list">
                            <li class="education__item education__item--php">
                                <span class="education__item-name">Академия программирования "PROFIT"<br>T4: быстрый вход в мир современных фреймворков</span>
                                <span class="education__item-time">май 2016 - июль 2016</span>
                            </li>
                            <li class="education__item education__item--db">
                                <span class="education__item-name">Академия программирования "PROFIT"<br>DBA: введение в профессию</span>
                                <span class="education__item-time">ноябрь 2015 - январь 2016</span>
                            </li>
                            <li class="education__item education__item--twig">
                                <span class="education__item-name">Академия программирования "PROFIT"<br>Twig: быстрый старт</span>
                                <span class="education__item-time">ноябрь 2015</span>
                            </li>
                            <li class="education__item education__item--php">
                                <span class="education__item-name">Академия программирования "PROFIT"<br>PHP-2: профессиональное программирование</span>
                                <span class="education__item-time">январь 2016 - март 2015</span>
                            </li>
                            <li class="education__item education__item--php">
                                <span class="education__item-name">Академия программирования "PROFIT"<br>PHP-1: введение в профессию</span>
                                <span class="education__item-time">декабрь 2015 - январь 2016</span>
                            </li>
                            <li class="education__item education__item--js">
                                <span class="education__item-name">HTML Academy<br>Интенсивный онлайн‑курс «Базовый JavaScript»</span>
                                <span class="education__item-time">октябрь 2015 - январь 2015</span>
                            </li>
                            <li class="education__item education__item--sass">
                                <span class="education__item-name">HTML Academy<br>Интенсивный онлайн‑курс «Продвинутый HTML и CSS»</span>
                                <span class="education__item-time">сентябрь 2015 - декабрь 2015</span>
                            </li>
                            <li class="education__item education__item--html5">
                                <span class="education__item-name">HTML Academy<br>Интенсивный онлайн‑курс «Базовый HTML и CSS»</span>
                                <span class="education__item-time">апрель 2015 - июль 2015</span>
                            </li>
                            <li class="education__item education__item--mgtu">
                                <span class="education__item-name">МГТУ им. Баумана</span>
                                <span class="education__item-time">1999 - 2005</span>
                            </li>
                        </ul>
                    </article>
                </div>
            </main>
            @include('parts.side-bar', ['active' => 'index'])
        </div>
    </div>


    @include('parts.popup')
@endsection