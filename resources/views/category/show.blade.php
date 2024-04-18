@extends('layouts.main', [
'title' => "$category->SEO_title",
'description' => "$category->SEO_description",
])

@section('content')

<div class="container">

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-category" style="background-image: url('/{{ $category->image }}')">
        <div class="col-lg-6 px-0">
            <h1 class=" display-4 fst-italic">{{ $category->title }}</h1>
            <p class="lead my-3">{{ $category->short_content }}</p>
        </div>
    </div>



    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @foreach ($posts as $post)

            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection" />
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">{{ $post->title }}</h3>
                <p>{{ $post->short_content }}</p>
                <a href="{{ route('post.show', $post->slug) }}">
                    Подробнее
                </a>
            </div>

            @endforeach

        </div>
    </div>

</div>

@endsection