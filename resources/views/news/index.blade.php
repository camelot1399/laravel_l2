<x-app-layout>

    <x-slot name="header">
        <h1>news</h1>
        <a class="border-2 border-green-600 text-green-600 text-lg p-1 hover:bg-green-700 hover:text-white" href="{{ route('news.create') }}">Create</a>
    </x-slot>

    @if(session()->has('success'))
        <div class="m-4 color-red">{{ session()->get('success') }}</div>
    @endif
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
