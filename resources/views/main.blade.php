@extends('layouts.main')

@section('content')

@include('includes.slider')

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 text-center">Основные категории услуг</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">

        @foreach ($categories as $category)

        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
            </svg>
        </div>

        <div class="feature col">
            <h3><a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a></h3>
            <p>{{ $category->short_content }}</p>
        </div>

        @endforeach

    </div>
</div>



<div class="px-4 py-5 text-center border-top">
    <img class="d-block mx-auto mb-4" src="logo.png" alt="" width="72">
    <h2 class="pb-2 text-center">О компании</h2>
    <div class="col-lg-6 mx-auto">
        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
            world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
            grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-lg-6 text-center text-lg-start">
            <h2 class="pb-2 text-center">Оставить заявку</h2>
            <p>Below is an example form built entirely with Bootstrap’s form controls.
                Each required form group has a validation state that can be triggered by attempting to submit
                the form without completing it.</p>
        </div>

        <div class="mx-auto col-lg-6">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <hr class="my-4">
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            </form>
        </div>

    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <div class="col-lg-6">
            <h2 class="pb-2 text-center">Здесь можно разместить карту и контакты
            </h2>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>

        <div class="col-lg-6">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b5be25323f5abdf2d893cdaea9fbc027b3174434be14f6d2bd845f4beae16c1&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
        </div>
    </div>
</div>

@endsection
