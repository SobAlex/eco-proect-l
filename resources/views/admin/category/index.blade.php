@extends('layouts.main')

@section('content')

<div class="mb-3">

    <div><a href="{{ route('admin.category.create') }}">Создать</a></div>
    <br>

    @foreach ($categories as $category)

    <h2>{{ $category->title  }}</h2>

    <img class="w-25" src="{{asset($category->image)}}" alt="{{ $category->image }}">

    <p>{{ $category->content }}</p>
    <a href="{{ route('admin.category.show', $category->id) }}">Подробнее</a>

    <br>
    <br>
    <br>

    @endforeach

</div>
@endsection
