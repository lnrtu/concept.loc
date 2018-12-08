<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">{{ config('app.name', 'Concept fitness') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('admin/configs') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/configs">Настройки</a>
            </li>
            <li class="nav-item {{Request::is('admin/promos') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/promos">Промокоды</a>
            </li>
            <li class="nav-item {{Request::is('admin/catalogs') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/catalogs">Каталог товаров</a>
            </li>
            <li class="nav-item {{Request::is('admin/chrs') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/chrs">Характеристики</a>
            </li>
            <li class="nav-item {{Request::is('admin/sitemenus') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/sitemenus">Меню сайта</a>
            </li>
            <li class="nav-item {{Request::is('admin/tms') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/tms">ТМ</a>
            </li>
            <li class="nav-item {{Request::is('admin/products') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/products">Товары</a>
            </li>
            <li class="nav-item {{Request::is('admin/articles') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/articles">Статьи</a>
            </li>
            <li class="nav-item {{Request::is('admin/novosts') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/novosts">Новости</a>
            </li>
            <li class="nav-item {{Request::is('admin/staticps') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/staticps">Стат. страницы</a>
            </li>
            <li class="nav-item {{Request::is('admin/comments') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/comments">Отзывы</a>
            </li>
            <li class="nav-item {{Request::is('admin/orders') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/orders">Заказы</a>
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