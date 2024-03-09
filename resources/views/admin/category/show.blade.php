@extends('layouts.main')

@section('content')

<div class="mb-3">

    <h2>{{ $category->title  }}</h2>

    <p>{{ $category->content }}</p>

    <img class="w-50" src="{{asset($category->image)}}" alt="{{ $category->image }}">

    <div>
        <a href="{{ route('admin.category.edit', $category->id) }}">Редактировать</a>

        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">Удалить</button>

        </form>
    </div>

</div>
@endsection
