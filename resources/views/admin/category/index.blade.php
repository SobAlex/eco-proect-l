@extends('layouts.main')

@section('content')

<div class="mb-3">

    @foreach ($categories as $category)

    <h2>{{ $category->title  }}</h2>
    <p>{{ $category->content }}</p>
    <img src="{{ $category->image }}" alt="{{ $category->image }}">
    <br>
    <a href="{{ route('admin.category.show', $category->id) }}">Подробнее</a>
    <br>
    <a href="{{ route('admin.category.create') }}">Создать</a>
    <br>
    <a href="{{ route('admin.category.edit', $category->id) }}">Редактировать</a>

    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">Удалить</button>

    </form>

    @endforeach

</div>
@endsection