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

            <table class="table">
                <thead>
                <tr>
                    <th class="w-1/2 max-w-0 ...">№</th>
                    <th class="w-1/2 ...">Name</th>
                    <th class="w-1/4 text-center ...">email</th>
                    <th class="w-1/4 ...">rule</th>
                    <th class="w-1/4 text-center ...">edit</th>
                    <th class="w-1/4 text-center ...">delete</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="max-w-0">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td>{{ $user->rule }}</td>
                            <td class="text-center">
                                <x-button.edit class="">
                                    <a class="" href="{{ route('adminpanel.userEdit', compact('user')) }}">{{ __('Edit') }}</a>
                                </x-button.edit>
                            </td>
                            <td>
                                <form action="{{ route('adminpanel.userDelete', compact('user')) }}" method="POST">
                                    @csrf
                                    <x-button.delete class="">
                                        {{ __('Delete') }}
                                    </x-button.delete>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>no users</p>
                    @endforelse
                </tbody>
            </table>



        </div>
    </div>


</x-app-layout>
