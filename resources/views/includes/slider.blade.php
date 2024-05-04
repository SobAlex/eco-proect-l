<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            @foreach ($slides as $slide)

            <div class="carousel-item active">
                <img src="{{ $slide->image }}" class="d-block w-100 h-100  rounded" alt="{{$slide->image}}">
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-2 text">{{ $slide->title }}</p>
                    <p class="fs-5 text">{{ $slide->content }}</p>
                    <p><a class="btn btn-success" href="{{ route('post.show', $slide->slug) }}">Перейти</a></p>
                </div>
            </div>

            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
