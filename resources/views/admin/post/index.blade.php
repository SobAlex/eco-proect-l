@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h1>Список услуг</h1>

    <div></div><a href="{{ route('admin.post.create') }}">Создать</a>
</div>
<br>

@foreach ($posts as $post)

<h2>{{ $post->title  }}</h2>

<img class="w-25" src="{{asset($post->image)}}" alt="{{ $post->image }}">

<p>{{ $post->content }}</p>

<a href="{{ route('admin.post.show', $post->id) }}">Подробнее</a>

<br>
<br>
<br>

@endforeach

</div>

@endsection
