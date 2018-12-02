<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">{{ config('app.name', 'Concept fitness') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Настройки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Промокоды</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Каталог товаров</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Характеристики</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Меню сайта</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ТМ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Товары</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Статьи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Стат. страницы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Заказы</a>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu " aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('logout') }} " onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"> Вийти</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>