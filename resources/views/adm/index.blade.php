<x-app-layout>

    <x-slot name="header">
        <h1>add new news</h1>
    </x-slot>

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <form method="POST" action="{{ route('adm.create') }}">
        @csrf
        <label for="title">
            Title:
            <br>
            <input type="text" id="title" placeholder="title" name="title">
        </label>

        <br>
        <br>

        <label for="category_id">
            Category:
            <br>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

        </label>

        <br>
        <br>

        <label for="description">
            Description:
            <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </label>

        <br>
        <br>

        <button type="submit" class="border-2 p-2">Send</button>

    </form>

</x-app-layout>

