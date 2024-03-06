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
                        <a href="{{ route('category.show', $id = 1) }}">Категория 1</a>
                        <ul>
                            <li><a href="{{ route('post.show', $id = 1) }}">Услуга 1</a></li>
                            <li><a href="#">Услуга 2</a></li>
                            <li><a href="#">Услуга 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Категория 2</a>
                        <ul>
                            <li><a href="#">Услуга 1</a></li>
                            <li><a href="#">Услуга 2</a></li>
                            <li><a href="#">Услуга 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Категория 3</a>
                        <ul>
                            <li><a href="#">Услуга 1</a></li>
                            <li><a href="#">Услуга 2</a></li>
                            <li><a href="#">Услуга 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Категория 4</a>
                        <ul>
                            <li><a href="#">Услуга 1</a></li>
                            <li><a href="#">Услуга 2</a></li>
                            <li><a href="#">Услуга 3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Контакты</a>
            </li>

            <li>
                <a href="{{ route('home.index') }}">Админ</a>
            </li>

        </ul>
    </nav>
</div>