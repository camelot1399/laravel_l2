<x-nav-link :href="route('adminpanel.userList')" :active="request()->routeIs('adminpanel.userList')">
    {{ __('Users') }}
</x-nav-link>
