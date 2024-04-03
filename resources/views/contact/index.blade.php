@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-6">

            <h2 class="mb-4">{{ $contact->name_firm }}</h2>

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