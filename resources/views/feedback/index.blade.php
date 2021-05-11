<x-app-layout>

    <x-slot name="header">
        <h1>Отправить отзыв</h1>
    </x-slot>

    @if(session()->has('success'))
        <div class="m-4 color-red">{{ session()->get('success') }}</div>
    @endif

    <x-feedback.feedback />


</x-app-layout>
