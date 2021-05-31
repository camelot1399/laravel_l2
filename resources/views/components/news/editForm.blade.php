@props(['news', 'categories'])

<form method="POST" action="{{ route('news.update', ['news' => $news]) }}">
    @csrf

    <div>
        <x-label for="name" :value="__('Title')" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="title" value="{{ $news->title }}" required autofocus />
    </div>

    <div class="mt-4">
        <x-label for="category_id" :value="__('Category')" />

        <select name="category_id" id="category_id" class="">
            @foreach($categories as $category)
                @if($category->id == $news->category_id)
                    <option value="{{ $category->id }}" selected="">{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif

            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <x-label for="description" :value="__('Description')" />

        <x-textarea id="description" name="description" :text="$news->description"></x-textarea>
    </div>

    <div class="flex mt-4">
        <x-button.edit class="">
            {{ __('Edit') }}
        </x-button.edit>
    </div>

</form>
