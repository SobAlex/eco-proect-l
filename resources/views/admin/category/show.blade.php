@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <h1>{{ $category->title  }}</h1>

            <img class="w-50 mt-3 mb-3" src="{{asset($category->image)}}" alt="{{ $category->image }}">

            <p>{{ $category->short_content }}</p>

            <p>{{ $category->content }}</p>

            <div class="d-flex inline-block">
                <a class="btn btn-success me-3" href="{{ route('admin.category.edit', $category->slug) }}">Редактировать</a>
            </div>
        </div>
        <!-- <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div> -->
    </div>
</div>
@endsection
