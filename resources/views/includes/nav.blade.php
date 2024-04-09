<div class="container row flex-nowrap justify-content-between contactHeaders">
    <div class="col-1 pt-1">
        <a href="{{ route('main.index') }}">
            <img src="{{ $contactHeader->logo }}" alt="Logo" width="70">
        </a>
    </div>
    <div class="col-4">
        <p>
            <span>{{ $contactHeader->name_firm }}</span><br>
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
        <img src="{{ asset('build/assets/icons8-whatsapp-48.png') }}" alt="whatsapp_icon" width="45" height="45">
    </div>
</div>
<div class="container nav-scroller">
    <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Меню</a>
    <nav>
        <ul class="menu">
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
                        <a href="{{ route('category.show', $cat1MenuItem->id) }}">Категория {{$cat1MenuItem->id}}</a>
                        <ul>
                            @foreach ($postsCat1MenuItems as $postsCat1MenuItem)

                            <li><a href="{{ route('post.show', $postsCat1MenuItem->id) }}">Услуга {{ $postsCat1MenuItem->id }}</a></li>

                            @endforeach

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('category.show', $cat2MenuItem->id) }}">Категория {{$cat2MenuItem->id}}</a>
                        <ul>
                            @foreach ($postsCat2MenuItems as $postsCat2MenuItem)

                            <li><a href="{{ route('post.show', $postsCat2MenuItem->id) }}">Услуга {{ $postsCat2MenuItem->id }}</a></li>

                            @endforeach

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('category.show', $cat3MenuItem->id) }}">Категория {{$cat3MenuItem->id}}</a>
                        <ul>
                            @foreach ($postsCat3MenuItems as $postsCat3MenuItem)

                            <li><a href="{{ route('post.show', $postsCat3MenuItem->id) }}">Услуга {{ $postsCat3MenuItem->id }}</a></li>

                            @endforeach

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('category.show', $cat4MenuItem->id) }}">Категория {{$cat4MenuItem->id}}</a>
                        <ul>
                            @foreach ($postsCat4MenuItems as $postsCat4MenuItem)

                            <li><a href="{{ route('post.show', $postsCat4MenuItem->id) }}">Услуга {{ $postsCat4MenuItem->id }}</a></li>

                            @endforeach

                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('contact.index') }}">Контакты</a>
            </li>

            @auth
            @if(Auth::user()->isAdmin())
            <li>
                <a href="{{ route('admin.home.index') }}">Админ</a>
            </li>
            @endif
            @endauth


            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>
</div>
