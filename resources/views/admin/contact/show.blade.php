@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-5">
            <h2>{{ $contact->name_firm }}</h2>

            <img class="w-50" src="{{asset($contact->image)}}" alt="{{ $contact->image }}">

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
    </div>
</div>
@endsection