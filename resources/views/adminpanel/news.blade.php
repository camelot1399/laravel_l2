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
            <div id="divTable" class="table container">

                <div class="divTableHeader table-header-group">
                    <div class="divTableRow table-row border-solid border-2">
                        <div class="table-cell">№</div>
                        <div class="table-cell">Title</div>
                        <div class="table-cell">Category</div>
                        <div class="table-cell">Description</div>
                        <div class="table-cell">Edit</div>
                    </div>
                </div>


                <div class="divTableBody table-row-group">
                    @foreach($news as $item)
                        <div class="divTableRow table-row border-solid border-2 mt-2 hover:bg-gray-400">
                            <div class="table-cell">{{ $item->id }}</div>
                            <div class="table-cell">{{ substr($item->title, 0, 30) }}...</div>
                            <div class="table-cell">{{ $item->category->name }}</div>
                            <div class="table-cell">{{ substr($item->description, 0, 50) }}...</div>
                            <div class="table-cell">
                                <div class="mt-1 mb-1">
                                    <x-button.edit class="">
                                        <a href="/adminpanel/news/{{ $item->id }}}/edit">{{ __('Edit') }}</a>
                                    </x-button.edit>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>


</x-app-layout>
