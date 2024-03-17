@extends('layouts.main');

@section('content')

<div class="container">
    <div class="row">
        <div class="col-7">

            <h1 class="mb-3">Добро пожаловать, {{ $user->name }}!</h1>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.category.index') }}">Список категорий услуг</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.post.index') }}">Список услуг</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.contact.index') }}">Контакты</a>
                </li>
            </ul>

        </div>
    </div>
</div>

@endsection