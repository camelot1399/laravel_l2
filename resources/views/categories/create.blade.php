<x-app-layout>

    <x-slot name="header">
        <h1>Create new category</h1>
    </x-slot>

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <label for="name">
            Name:
            <br>
            <input type="text" id="name" placeholder="name" name="name">
        </label>

        <br>

        <button type="submit" class="border-2 p-2">Send</button>

    </form>

</x-app-layout>

