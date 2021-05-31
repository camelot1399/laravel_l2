<x-app-layout>

    <x-slot name="header">
        <h1>news</h1>

        <x-button.create>
            <a class="" href="{{ route('news.create') }}">{{ __('Create') }}</a>
        </x-button.create>

        <x-button.create>
            <a class="" href="{{ route('parser') }}">{{ __('xml parse') }}</a>
        </x-button.create>

    </x-slot>

    @if(session()->has('success'))
        <div class="mt-2 mb-2 bg-blue-800 text-white p-2">{{ session()->get('success') }}</div>
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
