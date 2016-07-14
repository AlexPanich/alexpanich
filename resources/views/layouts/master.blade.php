<!DOCTYPE html>
<html lang="ru-RU">
<head>
    @include('parts.meta')
    <title>AlexPanich - @yield('title')</title>
    @include('parts.link')
    @include('parts.favicon')
</head>
<body>
@include('parts.inline-svg')
@yield('content')

@include('parts.script')
@include('parts.footer')
</body>
</html>

