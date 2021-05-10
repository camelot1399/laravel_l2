<x-app-layout>

    <x-slot name="header">
        <h1>news</h1>
        <a href="{{ route('news.create') }}">Create</a>
    </x-slot>

    <div class="flex flex-wrap justify-between -ms-3">
        @forelse($news as $newsItem)
            <div class="w-full md:w-1/3 lg:w-1/4 px-3">
                <x-news.list :newsItem="$newsItem"></x-news.list>
            </div>
        @empty
            <p>no news to day</p>
        @endforelse
    </div>


</x-app-layout>
