@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h1>Список услуг</h1>

    @foreach ($posts as $post)

    <h2>{{ $post->title  }}</h2>
    <p>{{ $post->content }}</p>
    <img src="{{ $post->image }}" alt="{{ $post->image }}">
    <br>
    <a href="{{ route('post.show', $post->id) }}">Подробнее</a>
    <br>
    <a href="{{ route('post.create') }}">Создать</a>
    <br>
    <a href="{{ route('post.edit', $post->id) }}">Редактировать</a>

    <form action="{{ route('post.delete', $post->id) }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">Удалить</button>

    </form>

    @endforeach

</div>

@endsection