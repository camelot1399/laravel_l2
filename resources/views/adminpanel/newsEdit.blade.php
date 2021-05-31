<x-app-layout>

    <x-slot name="header">
        <h1>Admin Panel</h1>
    </x-slot>

    @if(session()->has('success'))
        <div class="mt-2 mb-2 bg-blue-800 text-white p-2">{{ session()->get('success') }}</div>
    @endif


    <div class="flex">

        <!-- Navigation Links -->
        <div class=" sm:-my-px  sm:flex flex-col">
            <x-adminpanel.navigationLeftBlock></x-adminpanel.navigationLeftBlock>
        </div>

        <div class="ml-4 w-full text-left">
            <x-news.editForm :news="$news" :categories="$categories"></x-news.editForm>

        </div>
    </div>


</x-app-layout>
