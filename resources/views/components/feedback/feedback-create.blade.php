<div>
    <form method="POST" action="{{ route('feedback.store') }}">
    @csrf

        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
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
</div>
