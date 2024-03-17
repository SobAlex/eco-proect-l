@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-6">
            <h2>{{ $category->title  }}</h2>

            <img class="w-50 mt-3 mb-3" src="{{asset($category->image)}}" alt="{{ $category->image }}">

            <p>{{ $category->short_content }}</p>

            <p>{{ $category->content }}</p>

            <div class="d-flex inline-block">
                <a class="btn btn-success me-3" href="{{ route('admin.category.edit', $category->id) }}">Редактировать</a>
            </div>
        </div>
    </div>
</div>
@endsection