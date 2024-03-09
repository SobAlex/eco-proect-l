@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h2>{{ $post->title  }}</h2>

    <p>{{ $post->content }}</p>

    <img class="w-50" src="{{asset($post->image)}}" alt="{{ $post->image }}">

    <div>
        <a href="{{ route('admin.post.edit', $post->id) }}">Редактировать</a>

        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">Удалить</button>

        </form>
    </div>

</div>

@endsection
