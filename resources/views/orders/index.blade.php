<x-app-layout>

    <x-slot name="header">
        <h1>Форма для получения выгрузки данных</h1>
    </x-slot>

    @if(session()->has('success'))
        <div class="m-4 color-red">{{ session()->get('success') }}</div>
    @endif

    <div class="my-8">
        <x-auth-validation-errors :errors="$errors" />
    </div>

    <form method="POST" action="{{ route('order.store') }}">
        @csrf

        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <div>
            <x-label for="phone" :value="__('Phone')" />

            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required placeholer="89165555555" />
        </div>

        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="mt-4">
            <x-label for="description" :value="__('Description')" />

            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
        </div>


        <div class="flex mt-4">
            <x-button class="">
                {{ __('Create') }}
            </x-button>
        </div>
    </form>

</x-app-layout>
