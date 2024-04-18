<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <p>ООО "Природные ресурсы"</p>
            <small class="d-block mb-3 text-body-secondary">&copy; <?php echo date('Y'); ?></small>
        </div>

        <div class="col-6 col-md">
            <h5>О Компании</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary text-decoration-none" href="#">Сертификаты</a></li>
                <li><a class="link-secondary text-decoration-none" href="#">Отзывы</a></li>
                <li><a class="link-secondary text-decoration-none" href="#">Реализованые проекты</a></li>
                <li><a class="link-secondary text-decoration-none" href="#">Контакты</a></li>
            </ul>
        </div>

        <div class="col-6 col-md">
            <h5>Услуги</h5>
            <ul class="list-unstyled text-small">

                <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat1MenuItem->slug) }}">{{ $cat1MenuItem->title }}</a></li>
                <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat2MenuItem->slug) }}">{{ $cat2MenuItem->title }}</a></li>
                <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat3MenuItem->slug) }}">{{ $cat3MenuItem->title }}</a></li>
                <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat4MenuItem->slug) }}">{{ $cat4MenuItem->title }}</a></li>

            </ul>
        </div>

    </div>
</footer>