<x-nav-link :href="route('adminpanel.userList')" :active="request()->routeIs('adminpanel.userList')">
    {{ __('Users') }}
</x-nav-link>

<x-nav-link :href="route('adminpanel.news')" :active="request()->routeIs('adminpanel.news')">
    {{ __('News') }}
</x-nav-link>
