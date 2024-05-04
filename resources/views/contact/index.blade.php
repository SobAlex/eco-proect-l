@extends('layouts.main')

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-6 p-3">

            @include('includes.contact')

        </div>

        <div class="col-lg-6">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b5be25323f5abdf2d893cdaea9fbc027b3174434be14f6d2bd845f4beae16c1&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
        </div>
    </div>
</div>
@endsection
