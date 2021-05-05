<x-app-layout>

    <h1>Category</h1>

    <ul>
        @foreach($category as $categoryItem)
            <li><a href="{{ route('news.index', ['category' => $categoryItem]) }}"> {{ $categoryItem->name }}</a></li>
        @endforeach
    </ul>

</x-app-layout>
