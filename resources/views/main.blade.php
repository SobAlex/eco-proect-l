<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(["resources/css/bootstrap.css", "resources/css/app.css", "resources/css/font-awesome.css", "resources/js/bootstrap.bundle.js", "resources/js/app.js", "resources/js/menu.js",])
</head>

<body>

    <header class="border-bottom lh-1 py-3">
        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Large</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
            <div class="nav-scroller py-1 mb-3 border-bottom">
                <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Меню</a>
                <nav>
                    <ul class="menu">
                        <li>
                            <a href="#"><i class="icon-home"></i>Home</a>
                            <ul class="sub-menu">
                                <li><a href="#">sub 1</a></li>
                                <li><a href="#">sub 2</a></li>
                                <li><a href="#">sub 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-user"></i>About</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-camera"></i>Some</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Some 1</a>
                                </li>
                                <li>
                                    <a href="#">Some 3 Some</a>
                                    <ul>
                                        <li><a href="#">Some 4</a></li>
                                        <li><a href="#">Some 5</a></li>
                                        <li><a href="#">Some 6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-bullhorn"></i>Some</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-envelope-alt"></i>Some</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="container-fluid">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ Vite::asset('resources/assets/img/ekologicheskoe-proektirovanie_1980.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ Vite::asset('resources/assets/img/organizaciya-ekologicheskoj-bezopasnosti-na-predpriyatii.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ Vite::asset('resources/assets/img/sanitarno-epidemiologicheskaya-ekspertiza-promyshlennyh-zdanij_1366.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
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



        </div>
    </header>

    <main>
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom text-center">Основные категории услуг</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection" />
                        </svg>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Категория 1</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="cat1.html" class="icon-link">
                        Call to action
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection" />
                        </svg>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Категории 2</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="cat2.html" class="icon-link">
                        Call to action
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#people-circle" />
                        </svg>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Категории 3</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="cat3.html" class="icon-link">
                        Call to action
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2" />
                        </svg>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Категории 4</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence and probably just keep going until we run out of words.</p>
                    <a href="cat4.html" class="icon-link">
                        Call to action
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>



        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="logo.png" alt="" width="72">
            <h1 class="display-5 fw-bold text-body-emphasis">О компании</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                    grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                </div>
            </div>
        </div>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">

                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                        <hr class="my-4">
                        <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                    </form>
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Оставить заявку</h1>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls.
                        Each required form group has a validation state that can be triggered by attempting to submit
                        the form without completing it.</p>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="фрэйм для карты" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Здесь можно разместить карту и контакты
                    </h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">ссылка на страницу
                            контактов</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10" />
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
                <small class="d-block mb-3 text-body-secondary">&copy; 2017–2024</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</body>

</html>