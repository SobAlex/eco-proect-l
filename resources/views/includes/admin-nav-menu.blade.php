@auth

@if(Auth::user()->isAdmin())
<li class="dropdown">
    <a href="{{ route('admin.home.index') }}">Админ</a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="nav-link" href="{{ route('admin.message.index') }}">Заявки</a></li>
        <li><a class="nav-link" href="{{ route('admin.category.index') }}">Список категорий услуг</a></li>
        <li><a class="nav-link" href="{{ route('admin.post.index') }}">Список услуг</a></li>
        <li><a class="nav-link" href="{{ route('admin.contact.index') }}">Мои контакты</a></li>
    </ul>
</li>

@endif


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

@endauth
