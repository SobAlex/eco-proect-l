@extends('layouts.main')

@section('content')

@include('includes.slider')

<div class="container px-4 py-5" id="featured-3">
    <h1 class="pb-2 text-center">Санитарная и экологическая безопасность</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">

        @foreach ($categories as $category)

        <div class="col">
            <img src="{{ $category->image }}" class="fit-image" alt="{{ $category->title }}">
        </div>

        <div class="feature col">
            <h2><a href="{{ route('category.show', $category->slug) }}">{{ $category->title }}</a></h2>
            <p>{{ $category->short_content }}</p>
        </div>

        @endforeach

    </div>
</div>



<div class="px-4 py-5 text-center border-top">
    <img class="d-block mx-auto mb-4" src="logo.png" alt="" width="72">
    <p class="pb-2 text-center"><b>О компании</b></p>
    <div class="col-lg-6 mx-auto">
        <p>{{ $contact->main_text }}</p>
    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-lg-6 text-center text-lg-start">
            <p class="pb-2 text-center"><b>Оставить заявку</b></p>
            <p>Below is an example form built entirely with Bootstrap’s form controls.
                Each required form group has a validation state that can be triggered by attempting to submit
                the form without completing it.</p>
        </div>

        <div class="col-lg-6">
            @include('includes.form')
        </div>

    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <div class="col-lg-6">
            <p class="mb-4"><b>{{ $contact->name_firm }}</b></p>

            <p>{{ $contact->slogan }}</p>

            <p>Адрес: {{ $contact->adress }}</p>

            <p>График работы: {{ $contact->work_time }}</p>

            <p>Раб. тел.: <a href="tel:{{ $contact->tel_work }}">{{ $contact->tel_work }}</a></p>

            <p>Моб. тел.: <a href="tel:{{ $contact->tel_mob }}">{{ $contact->tel_mob }}</a></p>

            <p>E-mail: <a href="mailto:presurseco@mail.ru">{{ $contact->email }}</a></p>

        </div>

        <div class="col-lg-6">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b5be25323f5abdf2d893cdaea9fbc027b3174434be14f6d2bd845f4beae16c1&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
        </div>
    </div>
</div>

@endsection
