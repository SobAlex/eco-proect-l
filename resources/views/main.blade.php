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
            <h2 class="lh-1"><a class="fs-4 text" href="{{ route('category.show', $category->slug) }}">{{ $category->title }}</a></h2>
            <p class="fs-6 text">{{ $category->short_content }}</p>
        </div>

        @endforeach

    </div>
</div>



<div class="px-4 py-5 text-center border-top">
    <p class="pb-2 text-center fs-3 text"><b>О компании</b></p>
    <div class="col-lg-10 mx-auto fs-5 text">
        <p class="text-start">
            ООО "Природные ресурсы" предлагает Вам комплекс <a href="/categories">услуг</a> в области соблюдения требований санитарного, экологического законодательства, законодательства в области градостроительной деятельности, охраны труда и при эксплуатации действующих объектов.
        </p>
        <p class="text-start">
            Услуги оказываются высококвалифицированным персоналом с многолетним опытом разработки и согласования проектной документации, лабораторных исследований и сопровождения экологического характера для промышленных объектов и производств, объектов транспорта, связи, сельского хозяйства, энергетики, опытно-экспериментальных производств, объектов коммунального назначения и соци-альной сферы.
        </p>
        <p class="text-start">
            Укомплектованность большим парком новейших лабораторных приборов, автомобильным транспортом позволяет нашим сотрудникам оперативно выполнять потребности клиента в кратчайшие сроки с высоким качеством их выполнения, с гибкой системой цен и форм оплат по всему УрФО и в других регионах РФ. Разра-ботка документации выполняется в соответствии с требованиями законодательства РФ с использованием сертифицированных программных продуктов.
        </p>
    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-lg-6 text-center text-lg-start">
            <p class="pb-2 text-center fs-3 text"><b>Оставить заявку</b></p>
            <p class="fs-5 text text-start">Сроки выполнения работ и объемы будут оговорены при заключении договора.</p>
            <p class="fs-5 text text-start">Гарантируем высокое качество выполнения работ, гибкую систему формирования цен и оплаты работ, обязательную конфиденциальность.</p>
        </div>

        <div class="col-lg-6">
            @include('includes.form')
        </div>

    </div>
</div>

<div class="container px-4 py-5 border-top">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <div class="col-lg-6 ">
            <p class="mb-4 fs-3 text"><b>{{ $contact->name_firm }}</b></p>

            <p class="fs-5 text lh-sm">{{ $contact->slogan }}</p>

            <p class="fs-5 text">Адрес: {{ $contact->adress }}</p>

            <p class="fs-5 text">График работы: {{ $contact->work_time }}</p>

            <p class="fs-5 text">Раб. тел.: <a href="tel:{{ $contact->tel_work }}">{{ $contact->tel_work }}</a></p>

            <p class="fs-5 text">Моб. тел.: <a href="tel:{{ $contact->tel_mob }}">{{ $contact->tel_mob }}</a></p>

            <p class="fs-5 text">E-mail: <a href="mailto:presurseco@mail.ru">{{ $contact->email }}</a></p>

        </div>

        <div class="col-lg-6">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b5be25323f5abdf2d893cdaea9fbc027b3174434be14f6d2bd845f4beae16c1&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
        </div>
    </div>
</div>

@endsection
