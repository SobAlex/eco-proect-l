<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset($slide1->image) }}" class="d-block w-100 h-100" alt="{{$slide1->image}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slide1->title }}</h5>
                    <p>{{ $slide1->content }}</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset($slide2->image) }}" class="d-block w-100 h-100" alt="{{$slide2->image}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slide2->title }}</h5>
                    <p>{{ $slide2->content }}</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset($slide3->image) }}" class="d-block w-100 h-100" alt="{{$slide3->image}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slide3->title }}</h5>
                    <p>{{ $slide3->content }}</p>
                </div>
            </div>
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
