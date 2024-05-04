@extends('layouts.main')

@section('content')

<div class="container mb-3">

    <div class="row p-5 justify-content-between">

        <div class="col-lg-6">
            <h1 class="mb-4">Редактировать предприятие</h1>
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="logo" class="form-label"><b>Логотип</b> (файл должен называться logo.png)</label>
                    <input type="file" name="logo" class="form-control" id="logo">
                </div>

                <div class="mb-3">
                    <label for="name_firm" class="form-label"><b>Название фирмы</b></label>
                    <input type="text" name="name_firm" class="form-control" id="name_firm" value="{{ $contact->name_firm }}">
                </div>

                <div class="mb-3">
                    <label for="slogan" class="form-label"><b>Слоган</b></label>
                    <input type="text" name="slogan" class="form-control" id="slogan" value="{{ $contact->slogan }}">
                </div>

                <div class="mb-3">
                    <label for="adress" class="form-label"><b>Адрес</b></label>
                    <input type="text" name="adress" class="form-control" id="adress" value="{{ $contact->adress }}">
                </div>

                <div class="mb-3">
                    <label for="work_time" class="form-label"><b>График работы</b></label>
                    <input type="text" name="work_time" class="form-control" id="work_time" value="{{ $contact->work_time }}">
                </div>

                <div class="mb-3">
                    <label for="tel_work" class="form-label"><b>Рабочий телефон</b></label>
                    <input type="text" name="tel_work" class="form-control" id="tel_work" value="{{ $contact->tel_work }}">
                </div>

                <div class="mb-3">
                    <label for="tel_mob" class="form-label"><b>Мобильный телефон</b></label>
                    <input type="text" name="tel_mob" class="form-control" id="tel_mob" value="{{ $contact->tel_mob }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><b>E-mail</b></label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Обновить</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
