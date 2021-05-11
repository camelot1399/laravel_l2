<x-app-layout>

    <x-slot name="header">
        <h1>Category</h1>

        <a href="{{ route('categories.create') }}">Create</a>
    </x-slot>

    @if(session()->has('success'))
        <div class="m-4 color-red">{{ session()->get('success') }}</div>
    @endif

    <ul>
        @foreach($category as $categoryItem)
            <li>№ {{ $categoryItem->id }} <a href="{{ route('news.index', ['category' => $categoryItem]) }}"> {{ $categoryItem->name }}</a></li>
        @endforeach
    </ul>

</x-app-layout>
