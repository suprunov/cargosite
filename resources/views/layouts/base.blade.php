<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Каргономика: @yield('title')</title>
    @viteReactRefresh
    @vite(['resources/js/app.js'])
</head>
<body class="body-on-load ">
    @include('layouts.header')
    <div class="main-wrapper">
        <main class="main">
            @yield('breadcrumbs')
{{--            <x-breadcrumbs></x-breadcrumbs>--}}
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <x-forms.auth></x-forms.auth>
    <x-forms.cookie></x-forms.cookie>
    <x-menu.burger></x-menu.burger>
</body>
</html>
