<x-app-layout>

    <x-slot name="header">
        <h1>news</h1>
    </x-slot>
    <ul>
        @foreach($news as $newsItem)
            <li><a href="{{ route('news.show', ['news' => $newsItem]) }}">({{ $newsItem->category->name }}) {{ $newsItem->title }}}</a></li>
        @endforeach
    </ul>
</x-app-layout>
