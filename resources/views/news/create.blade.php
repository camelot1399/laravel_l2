<x-app-layout>

    <x-slot name="header">
        <h1>Create news</h1>
    </x-slot>

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <form method="POST" action="{{ route('news.store') }}">
    @csrf

    <!-- Email Address -->
        <div>
            <x-label for="title" :value="__('Title')" />

            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <div class="mt-4">
            <x-label for="description" :value="__('Description')" />

            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
        </div>

        <div class="mt-4">
            <x-label for="category_id" :value="__('Category')" />

            <select name="category_id" id="category_id" class="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex mt-4">
            <x-button class="">
                {{ __('Create') }}
            </x-button>
        </div>
    </form>
</x-app-layout>

