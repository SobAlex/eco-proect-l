<div class="container row flex-nowrap justify-content-between contactHeaders">
    <div class="col-1 pt-1">
        <a href="{{ route('main.index') }}">
            <img src="{{ Vite::asset('resources/img/logo.png')}}" alt="Logo" width="70">
        </a>
    </div>
    <div class="col-4">
        <p>
            <span class="fs-4 text"><b>{{ $contactHeader->name_firm }}</b></span><br>
            {{ $contactHeader->slogan }}
        </p>
    </div>
    <div class="col-6">
        <address>
            {{ $contactHeader->adress }}<br>
            {{ $contactHeader->work_time }}<br>
            Тел(раб.): <a href="tel:{{ $contactHeader->tel_work }}">{{ $contactHeader->tel_work }}</a>, Тел(моб.): <a href="tel:{{ $contactHeader->tel_mob }}">{{ $contactHeader->tel_mob }}</a><br>

            E-mail: <a href="mailto:presurseco@mail.ru">{{ $contactHeader->email }}</a>
        </address>
    </div>

    <div class="col-1 d-flex justify-content-end">
        <img src="{{ Vite::asset('resources/img/icons8-whatsapp-48.png')}}" alt="whatsapp_icon" width="45" height="45">
    </div>
</div>
<div class="container nav-scroller">
    <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Меню</a>
    <nav class="rounded">
        <ul class="menu">
            <div class="row">
                <div class="col-8">
                    <li>
                        <a href="#">О компании</a>
                        <ul class="sub-menu">
                            <li><a href="#">Сертификаты</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('category.index') }}">Услуги</a>
                        <ul class="sub-menu">

                            <li>
                                <a href="{{ route('category.show', $cat1MenuItem->slug) }}">{{$cat1MenuItem->title}}</a>
                                <ul>
                                    @foreach ($postsCat1MenuItems as $postsCat1MenuItem)

                                    <li><a href="{{ route('post.show', $postsCat1MenuItem->slug) }}">{{ $postsCat1MenuItem->title }}</a></li>

                                    @endforeach

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('category.show', $cat2MenuItem->slug) }}">{{$cat2MenuItem->title}}</a>
                                <ul>
                                    @foreach ($postsCat2MenuItems as $postsCat2MenuItem)

                                    <li><a href="{{ route('post.show', $postsCat2MenuItem->slug) }}">{{ $postsCat2MenuItem->title }}</a></li>

                                    @endforeach

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('category.show', $cat3MenuItem->slug) }}">{{$cat3MenuItem->title}}</a>
                                <ul>
                                    @foreach ($postsCat3MenuItems as $postsCat3MenuItem)

                                    <li><a href="{{ route('post.show', $postsCat3MenuItem->slug) }}">{{ $postsCat3MenuItem->title }}</a></li>

                                    @endforeach

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('category.show', $cat4MenuItem->slug) }}">{{ $cat4MenuItem->title }}</a>
                                <ul>
                                    @foreach ($postsCat4MenuItems as $postsCat4MenuItem)

                                    <li><a href="{{ route('post.show', $postsCat4MenuItem->slug) }}">{{ $postsCat4MenuItem->title }}</a></li>

                                    @endforeach

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}">Контакты</a>
                    </li>
                </div>
                <div class="col-4 text-end">
                    @include('includes.admin-nav-menu')
                </div>
            </div>
        </ul>
    </nav>
</div>
