@extends('layouts.main')

@section('content')

<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
        <h1 class="display-4 fst-italic">Это каталог услуг с категориями!!!</h1>
        <p class="lead my-3">Тут дохуя всего лишнего. Но в целом много и полезного. Прибраться и будет заебок. Тут пока
            ничего не работает так что можешь не тыкать.</p>
        <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
</div>

<div class="row g-5">
    <div class="col-md-12">
        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category1->title }}</h2>
                    <p class="text-body-secondary">{{ $category1->content }}</p>
                    <a href="{{ route('category.show', $category1->id) }}" class="btn btn-primary btn-lg">Перейти</a>
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        @foreach ($postsCat1 as $postCat1 )

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">{{$postCat1->title}}</h4>
                            <p class="text-body-secondary">{{$postCat1->content}}</p>
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

                        @foreach ($postsCat2 as $postCat2 )

                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection" />
                                </svg>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis">{{$postCat2->title}}</h4>
                            <p class="text-body-secondary">{{$postCat2->content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category2->title }}</h2>
                    <p class="text-body-secondary">{{ $category2->content }}</p>
                    <a href="{{ route('category.show', $category2->id) }}" class="btn btn-primary btn-lg">Перейти</a>
                </div>

            </div>
        </div>

        <div class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category3->title }}</h2>
                    <p class="text-body-secondary">{{ $category3->content }}</p>
                    <a href="{{ route('category.show', $category3->id) }}" class="btn btn-primary btn-lg">Перейти</a>
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
                            <h4 class="fw-semibold mb-0 text-body-emphasis">{{$postCat3->title}}</h4>
                            <p class="text-body-secondary">{{$postCat3->content}}</p>
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
                            <h4 class="fw-semibold mb-0 text-body-emphasis">{{$postCat4->title}}</h4>
                            <p class="text-body-secondary">{{$postCat4->content}}</p>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis">{{ $category4->title }}</h2>
                    <p class="text-body-secondary">{{ $category4->content }}</p>
                    <a href="{{ route('category.show', $category4->id) }}" class="btn btn-primary btn-lg">Перейти</a>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection
