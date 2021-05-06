<x-app-layout>

    <x-slot name="header">
        <h1>add new news</h1>
    </x-slot>

    <form action="#" class="pt-10 pb-10">

        <label for="name">
            Name:
            <br>
            <input type="text" id="name" placeholder="name">
        </label>

        <br>
        <br>

        <label for="category">
            Category:
            <br>
            <input type="text" id="category" name="category" placeholder="category">
        </label>

        <br>
        <br>

        <label for="briefDescription">
            Brief Description:
            <br>
            <input type="text" id="briefDescription" name="briefDescription" placeholder="briefDescription">
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

