<nav class="flex flex-nowrap">
    <ul class="navHeader__ul flex flex-wrap ml-5">
        <li class="navHeader__li "><a class="navHeader__a" href="/">Home</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="/about">About</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="{{ route('news.index') }}">News</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="{{ route('categories.index') }}">Categories list</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="/auth">Auth</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="{{ route('feedback.index') }}">feedback</a></li>
        <li class="navHeader__li ml-5"><a class="navHeader__a" href="{{ route('order.create') }}">Форма для получения выгрузки данных</a></li>
    </ul>
</nav>
