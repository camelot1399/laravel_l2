<x-app-layout>

    <x-slot name="header">
        <h1>{{ $news->title }}</h1>
    </x-slot>

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <div class="mb-4 text-gray-500">{{ $news->created_at->format('d.m.Y') }}</div>
    <p>{{ $news->description }}</p>

    <div class="flex mt-3">
        <x-button.edit class="">
            <a class="" href="{{ route('news.edit', compact('news')) }}">{{ __('Edit') }}</a>
        </x-button.edit>

        <form action="{{ route('news.delete', ['news' => $news]) }}" method="POST" class="ml-2">
            @csrf
            <x-button.delete class="">
                {{ __('Delete') }}
            </x-button.delete>
        </form>
    </div>


</x-app-layout>


