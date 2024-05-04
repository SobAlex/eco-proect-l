@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row p-5">
        <div class="col-lg-8">
            <div class="d-flex">
                <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="Logo" width="70">
                <h1>{{ $contact->name_firm }}</h1>
            </div>

            <p><b>Слоган:</b> {{ $contact->slogan }}</p>

            <p><b>Адрес:</b> {{ $contact->adress }}</p>

            <p><b>График работы:</b> {{ $contact->work_time }}</p>

            <p><b>Раб. тел.:</b> {{ $contact->tel_work }}</p>

            <p><b>Моб. тел.:</b> {{ $contact->tel_mob }}</p>

            <p><b>E-mail:</b> {{ $contact->email }}</p>

            <div class="d-flex inline-block">
                <a class=" btn btn-success me-3" href="{{ route('admin.contact.edit', $contact->id) }}">Редактировать</a>
            </div>
        </div>
    </div>
</div>
@endsection
