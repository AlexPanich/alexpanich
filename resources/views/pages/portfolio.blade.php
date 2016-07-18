@extends('layouts.master')

@section('title')
    Портфолио
@endsection

@section('content')
    @include('parts.header', ['active' => 'portfolio'])
    <div class="page-content">
        <div class="page-content__inner">
            <main class="main-content">
                <div class="main-content__inner">
                    <section class="my-works">
                        <header class="my-works__title">Мои работы</header>
                        <div class="my-works__content">
                            @foreach($works as $work)
                            <article class="work">
                                <div class="work__image-wrap">
                                    <a href="{{ $work->url }}" target="_blank">
                                        <div class="work__overlay">
                                            <div class="work__title">{{ $work->title }}</div>
                                        </div>
                                        <img class="work__image" src="{{ $work->getPreviewTn() . '' }}" alt="{{ $work->title }}">
                                    </a>
                                </div>
                                <a href="{{ $work->github }}" class="work__link">Посмотреть код</a>
                                <div class="work__desc">{{ $work->description }}</div>
                            </article>
                            @endforeach

                            @if(Auth::check() && Auth::user()->id == 1)
                            <div class="add-work">
                                <a href="/add-work">
                                    <svg class="new-work"><use xlink:href="#icon-new-work"></use></svg>
                                    Добавить проект
                                </a>
                            </div>
                            @endif
                        </div>
                    </section>
                </div>
            </main>

            @include('parts.side-bar', ['active' => 'portfolio'])
        </div>
    </div>
    @include('parts.popup')
@endsection