@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">

            <h2>{{ $post->title  }}</h2>

            <img class="w-50  mt-3 mb-3" src="{{asset($post->image)}}" alt="{{ $post->image }}">

            <p>{{ $post->short_content }}</p>

            <p>{{ $post->content }}</p>

            <div class="d-flex inline-block">
                <a class="btn btn-success me-3" href="{{ route('admin.post.edit', $post->slug) }}">Редактировать</a>

                <form action="{{ route('admin.post.delete', $post->slug) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" type="submit">Удалить</button>

                </form>
            </div>
        </div>
        <!-- <div class="col-lg-4">
            @include('includes.admin-nav-content')
        </div> -->
    </div>

</div>

@endsection
