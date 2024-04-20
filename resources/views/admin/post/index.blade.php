@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Список услуг</h1>
                <a class="btn btn-success" href="{{ route('admin.post.create') }}">Создать услугу</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Услуга</th>
                        <th scope="col">Категория</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="{{ route('admin.post.show', $post->slug) }}">{{ $post->title }}</a></td>
                        <td><a href="{{ route('admin.category.show', $post->category->slug) }}">{{ $post->category->title }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div>
    </div>
</div>

@endsection
