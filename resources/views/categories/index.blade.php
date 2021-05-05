<x-app-layout>

    <x-slot name="header">
        <h1>Category</h1>
    </x-slot>

    <ul>
        @foreach($category as $categoryItem)
            <li><a href="{{ route('news.index', ['category' => $categoryItem]) }}"> {{ $categoryItem->name }}</a></li>
        @endforeach
    </ul>

</x-app-layout>
