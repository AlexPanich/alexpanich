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
                    @include('parts.forms.create-work');
                </div>
            </main>

            @include('parts.side-bar', ['active' => 'portfolio'])
        </div>
    </div>
    @include('parts.popup')
@endsection