@extends('layouts.main')

@section('content')

<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Санитарная и экологическая безопасность</h1>
            <p class="lead my-3">Наши основные направления деятельности</p>
        </div>
    </div>
</div>

<div class="row g-5">
    <div class="col-md-12">
        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category1->title }}</h2>
                    <p class="text-body-secondary">{{ $category1->short_content }}</p>
                    <a href="{{ route('category.show', $category1->slug) }}" class="btn btn-primary btn-lg">Все услуги</a>
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        @foreach ($postsCat1 as $postCat1)

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi bi-globe2" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="{{ route('post.show', $postCat1->slug) }}">{{$postCat1->title}}</a></h4>
                            <p class="text-body-secondary">{{$postCat1->short_content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        @foreach ($postsCat2 as $postCat2)

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="{{ route('post.show', $postCat2->slug) }}">{{$postCat2->title}}</a></h4>
                            <p class="text-body-secondary">{{$postCat2->short_content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category2->title }}</h2>
                    <p class="text-body-secondary">{{ $category2->short_content }}</p>
                    <a href="{{ route('category.show', $category2->slug) }}" class="btn btn-primary btn-lg">Все услуги</a>
                </div>

            </div>
        </div>

        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category3->title }}</h2>
                    <p class="text-body-secondary">{{ $category3->short_content }}</p>
                    <a href="{{ route('category.show', $category3->slug) }}" class="btn btn-primary btn-lg">Все услуги</a>
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        @foreach ($postsCat3 as $postCat3 )

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="{{ route('post.show', $postCat3->slug) }}">{{$postCat3->title}}</a></h4>
                            <p class="text-body-secondary">{{$postCat3->short_content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        @foreach ($postsCat4 as $postCat4 )

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><a href="{{ route('post.show', $postCat4->slug) }}">{{$postCat4->title}}</a></h4>
                            <p class="text-body-secondary">{{$postCat4->short_content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category4->title }}</h2>
                    <p class="text-body-secondary">{{ $category4->short_content }}</p>
                    <a href="{{ route('category.show', $category4->slug) }}" class="btn btn-primary btn-lg">Все услуги</a>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
