@extends('layouts.main')

@section('content')

<div class="container">

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-post" style="background-image: url('/{{ $post->image }}')">
        <div class="col-lg-6 px-0">
            <h1 class=" display-4 fst-italic">{{ $post->title }}</h1>
            <p class="lead my-3">{{ $post->short_content }}</p>
        </div>
    </div>

</div>

<div class="row g-5">
    <div class="col-md-8">

        <article class="blog-post">
            <p>{{ $post->content }}</p>
        </article>

    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">

            <div>
                <h4 class="fst-italic">Разместить форму для заказа</h4>
                <ul class="list-unstyled">
                    <li>
                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <div class="col-lg-8">
                                <h6 class="mb-0">Example blog post title</h6>
                                <small class="text-body-secondary">January 15, 2024</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <div class="col-lg-8">
                                <h6 class="mb-0">This is another blog post title</h6>
                                <small class="text-body-secondary">January 14, 2024</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <div class="col-lg-8">
                                <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                <small class="text-body-secondary">January 13, 2024</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection