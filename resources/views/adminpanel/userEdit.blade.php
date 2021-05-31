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

        <div class="ml-4">

            <h2>Редактирование юзера: {{ $user->name }}</h2>

{{--            <form action="/adminpanel/updateUser/1" method="POST">--}}
            <form action="{{ route('adminpanel.userUpdate', ['user' => $user]) }}" method="POST">
{{--            <form action="{{ route('adminpanel.userList.userEdit', ['user' => $user]) }}" method="POST">--}}
                @csrf

                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                </div>

                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $user->email }}" required />
                </div>

                <div>
                    <x-label for="rule" :value="__('Rule')" />

                    <select name="rule" id="rule" class="">
                        @foreach($rules as $key=>$value)
                            @if($key == $user->rule)
                                <option value="{{ $key }}" selected="">{{ $value }}</option>
                            @else
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>

                <div class="flex mt-4">
                    <x-button.edit class="">
                        {{ __('Save') }}
                    </x-button.edit>
                </div>

            </form>

        </div>
    </div>


</x-app-layout>
