<div class="border-2 mb-2 p-2">
    <a href="{{ route('news.show', ['news' => $newsItem]) }}">

        <div class="font-bold">
            {{ $newsItem->title }}
        </div>

        <div class="flex font-small mt-5">
            <input type="text" value="{{ $newsItem->category->name }}">
            <div class="">
                {{ $newsItem->created_at->format('d.m.Y') }}
            </div>
        </div>
    </a>
</div>
