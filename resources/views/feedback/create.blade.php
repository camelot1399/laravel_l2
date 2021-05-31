<x-app-layout>

    <x-slot name="header">
        <h1>Отправить отзыв</h1>
    </x-slot>

    @if(session()->has('success'))
        <div class="m-4 color-red">{{ session()->get('success') }}</div>
    @endif

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <x-feedback.feedback-create />


</x-app-layout>
