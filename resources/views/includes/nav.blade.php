<div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-3 pt-1">
        <a class="link-secondary" href="{{ route('main.index') }}">Logo</a>
        <a class="link-secondary" href="#">ООО "Природные ресурсы"</a>
    </div>
    <div class="col-3 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Адрес</a>
    </div>
    <div class="col-3 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Контактная инфа</a>
    </div>
    <div class="col-3 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                <title>Search</title>
                <circle cx="10.5" cy="10.5" r="7.5" />
                <path d="M21 21l-5.2-5.2" />
            </svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#"><i class="icon-user"></i>Sign up</a>
    </div>
</div>
<div class="nav-scroller py-1">
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
                <a href="#">Контакты</a>
            </li>

            <li>
                <a href="{{ route('admin.home.index') }}">Админ</a>
            </li>

        </ul>
    </nav>
</div>
