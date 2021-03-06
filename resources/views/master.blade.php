<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('file.Anime') }} @yield('title')</title>
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>

@include('header')

@yield('content')

@include('footer')

</body>
</html>
