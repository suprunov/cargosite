@extends('layouts.base')
@section('title', 'Документация')
@section('content')
    <style>
        .docs-list__item:before {
            background: url(/local/templates/main/assets/img/icons/file-pdf.svg) 50% 50% no-repeat;
        }
    </style>
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">документация</span>
        </div>
    </div>
    <section class="about-docs">
        <div class="about-docs__inner">
            <h2 class="about-docs__heading">Документы</h2>
            <div class="docs-list">
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
            </div>
        </div>
    </section>
@endsection
