@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-6">
            <div class="d-flex">
                <img class="me-3" src="{{asset($contact->logo)}}" alt="{{ $contact->logo }}" width="50">
                <h2>{{ $contact->name_firm }}</h2>
            </div>

            <p>{{ $contact->slogan }}</p>

            <p>Адрес: {{ $contact->adress }}</p>

            <p>График работы: {{ $contact->work_time }}</p>

            <p>Раб. тел.: {{ $contact->tel_work }}</p>

            <p>Моб. тел.: {{ $contact->tel_mob }}</p>

            <p>E-mail: {{ $contact->email }}</p>

            <div class="d-flex inline-block">
                <a class=" btn btn-success me-3" href="{{ route('admin.contact.edit', $contact->id) }}">Редактировать</a>
            </div>
        </div>
        <div class="col-6">
            <p>текст на главной</p>
        </div>
    </div>
</div>
@endsection