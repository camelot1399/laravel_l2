<div class="border-2">
    <a href="{{ route('news.show', ['news' => $newsItem]) }}">
        <p>{{ $newsItem->category->name }}</p>
        <div>
            {{ $newsItem->title }}}
        </div>

        <div class="">
            {{ $newsItem->created_at->format('d.m.Y') }}
        </div>
    </a>
</div>
