@extends('layouts.master')

@section('title')
    Контакты
@endsection

@section('content')
    @include('parts.header', ['active' => 'contacts'])

    <div class="page-content">
        <div class="page-content__inner">
            <main class="main-content">
                <div class="main-content__inner">
                    <article class="contact-form">
                        <h2 class="contact-form__title">
                            У вас есть интересный проект?<br>
                            Напишите мне
                        </h2>
                       @include('parts.forms.contacts')
                    </article>
                </div>
            </main>
            @include('parts.side-bar', ['active' => 'contacts'])
        </div>
    </div>


    @include('parts.popup')
@endsection