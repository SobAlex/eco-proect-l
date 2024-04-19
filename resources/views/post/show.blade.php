@extends('layouts.main', [
'title' => "$post->SEO_title",
'description' => "$post->SEO_description",
])

@section('content')

<div class="container">

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-post" style="background-image: url('/{{ $post->image }}')">
        <div class="col-lg-6 px-0">
            <h1 class=" display-4 fst-italic">{{ $post->title }}</h1>
            <p class="lead my-3">{{ $post->short_content }}</p>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-7">

            <article class="blog-post">
                <p>{{ $post->content }}</p>
            </article>

        </div>
        <div class="col-md-5">

            <h2 class="text-center"><b>Заказать услугу</b></h2>

            @include('includes.form')

        </div>

    </div>



</div>

@endsection
