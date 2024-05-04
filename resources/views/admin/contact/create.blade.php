@extends('layouts.main')

@section('content')

<div class="container mb-3">

    <h1>Создать контактные данные</h1>

    <form action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="logo" class="form-label">Логотип</label>
            <input type="file" name="logo" class="form-control" id="logo">
        </div>

        <div class="mb-3">
            <label for="name_firm" class="form-label">Название фирмы</label>
            <input type="text" name="name_firm" class="form-control" id="name_firm">
        </div>

        <div class="mb-3">
            <label for="slogan" class="form-label">Слоган</label>
            <input type="text" name="slogan" class="form-control" id="slogan">
        </div>

        <div class="mb-3">
            <label for="adress" class="form-label">Адрес</label>
            <input type="text" name="adress" class="form-control" id="adress">
        </div>

        <div class="mb-3">
            <label for="work_time" class="form-label">График работы</label>
            <input type="text" name="work_time" class="form-control" id="work_time">
        </div>

        <div class="mb-3">
            <label for="tel_work" class="form-label">Рабочий телефон</label>
            <input type="text" name="tel_work" class="form-control" id="tel_work">
        </div>

        <div class="mb-3">
            <label for="tel_mob" class="form-label">Мобильный телефон</label>
            <input type="text" name="tel_mob" class="form-control" id="tel_mob">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>


        <div class="mb-3">
            <button type="submit">Создать</button>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>


</div>

@endsection