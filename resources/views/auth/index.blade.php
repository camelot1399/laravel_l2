<x-app-layout>

    <x-slot name="header">
        <h1>Auth</h1>
    </x-slot>

    <form action="/adm">
        <label for="login">
            Login:
            <input type="text" name="login" placeholder="login" id="login" required>
        </label>
        <br>
        <label for="password">
            Password:
            <input type="password" name="password" placeholder="password" id="password" required>
        </label>
        <br>
        <label for="saveMe">
            Запомнить меня:
            <input type="checkbox" name="saveMe" id="saveMe">
        </label>
        <br>
        <button type="submit">Войти</button>
    </form>

</x-app-layout>
