<x-app-layout>

    <x-slot name="header">
        <h1>{{ $news->title }}</h1>
    </x-slot>

    <p>{{ $news->created_at->format('d.m.Y') }}</p>
    <p>{{ $news->description }}</p>
</x-app-layout>


