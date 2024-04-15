@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <h1 class="mb-4">Редактировать</h1>
        <div class="col-6">
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                @method('PUT')

                <p><b>Контактные данные</b></p>

                <div class="mb-3">
                    <label for="logo" class="form-label">Логотип (файл должен называться logo.png)</label>
                    <input type="file" name="logo" class="form-control" id="logo">
                </div>

                <div class="mb-3">
                    <label for="name_firm" class="form-label">Название фирмы</label>
                    <input type="text" name="name_firm" class="form-control" id="name_firm" value="{{ $contact->name_firm }}">
                </div>

                <div class="mb-3">
                    <label for="slogan" class="form-label">Слоган</label>
                    <input type="text" name="slogan" class="form-control" id="slogan" value="{{ $contact->slogan }}">
                </div>

                <div class="mb-3">
                    <label for="adress" class="form-label">Адрес</label>
                    <input type="text" name="adress" class="form-control" id="adress" value="{{ $contact->adress }}">
                </div>

                <div class="mb-3">
                    <label for="work_time" class="form-label">График работы</label>
                    <input type="text" name="work_time" class="form-control" id="work_time" value="{{ $contact->work_time }}">
                </div>

                <div class="mb-3">
                    <label for="tel_work" class="form-label">Рабочий телефон</label>
                    <input type="text" name="tel_work" class="form-control" id="tel_work" value="{{ $contact->tel_work }}">
                </div>

                <div class="mb-3">
                    <label for="tel_mob" class="form-label">Мобильный телефон</label>
                    <input type="text" name="tel_mob" class="form-control" id="tel_mob" value="{{ $contact->tel_mob }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}">
                </div>

                <p><b>Текст на главной странице</b></p>

                <div class=" mb-3">
                    <textarea name="main_text" id="main_text" cols="100" rows="10">{{ $contact->main_text }}</textarea>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Обновить</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection