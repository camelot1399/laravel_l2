<x-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')">
    {{ __('Home') }}
</x-nav-link>

<x-nav-link :href="route('news.index')" :active="request()->routeIs('news.index')">
    {{ __('News') }}
</x-nav-link>

<x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
    {{ __('Categories') }}
</x-nav-link>

<x-nav-link :href="route('feedback.index')" :active="request()->routeIs('feedback.index')">
    {{ __('Feedback') }}
</x-nav-link>

<x-nav-link :href="route('order.create')" :active="request()->routeIs('order.create')">
    {{ __('Форма для получения выгрузки данных') }}
</x-nav-link>

<x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">
    {{ __('About') }}
</x-nav-link>

<x-nav-link :href="route('adminpanel.index')" :active="request()->routeIs('adminpanel.index')">
    {{ __('AdminPanel') }}
</x-nav-link>
