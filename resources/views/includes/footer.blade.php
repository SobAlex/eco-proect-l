<div class="container row">
    <div class="col-12 col-md">
        <p><b>ООО "Природные ресурсы"</b></p>
        <small class="d-block mb-3 text-body-secondary">&copy; <?php echo date('Y'); ?></small>
    </div>

    <div class="col-6 col-md">
        <p><b>О Компании</b></p>
        <ul class="list-unstyled text-small">
            <li><a class="link-secondary text-decoration-none" href="#">Сертификаты</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Отзывы</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Реализованые проекты</a></li>
            <li><a class="link-secondary text-decoration-none" href="{{ route('contact.index') }}">Контакты</a></li>
        </ul>
    </div>

    <div class="col-6 col-md">
        <p><b>Услуги</b></p>
        <ul class="list-unstyled text-small">

            <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat1MenuItem->slug) }}">{{ $cat1MenuItem->title }}</a></li>
            <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat2MenuItem->slug) }}">{{ $cat2MenuItem->title }}</a></li>
            <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat3MenuItem->slug) }}">{{ $cat3MenuItem->title }}</a></li>
            <li><a class="link-secondary text-decoration-none" href="{{ route('category.show', $cat4MenuItem->slug) }}">{{ $cat4MenuItem->title }}</a></li>

        </ul>
    </div>

</div>
