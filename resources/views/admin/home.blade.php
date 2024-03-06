@extends('layouts.main');

@section('content')

<h1>Добро пожаловать пользователь такойто!</h1>

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('admin.category.index') }}">Список категорий услуг</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.post.index') }}">Список услуг</a>
    </li>
</ul>

@endsection