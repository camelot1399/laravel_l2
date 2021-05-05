<x-app-layout>
    <h1>news</h1>
    <ul>
        @foreach($news as $newsItem)
            <li><a href="{{ route('news.show', ['news' => $newsItem]) }}">({{ $newsItem->category->name }}) {{ $newsItem->title }}}</a></li>
        @endforeach
    </ul>
</x-app-layout>
