<x-app-layout>

    <x-slot name="header">
        <h1>{{ $news->title }}</h1>
    </x-slot>

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>
    <p>{{ $news->created_at->format('d.m.Y') }}</p>
    <p>{{ $news->description }}</p>
</x-app-layout>


