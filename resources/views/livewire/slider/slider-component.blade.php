<div>
    @section('title', 'Slider |')
    @if ($slider_list)

        <x-card>
            <x-card.header>
                <h2>Slider List</h2>
                <x-button wire:click.prevent="createItem()">Add New Slider</x-button>
            </x-card.header>
            <x-card.body>
                <div class="p-4">
                    <div class="relative w-1/6 ml-auto">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search" wire:model.debounce.500ms="search">
                    </div>
                </div>
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                SL
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slider Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Create at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated at
                            </th>
                            <th scope="col" class="pr-10 text-right">
                                {{-- <span class="sr-only">Action</span> --}}
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $key=>$item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{$key +  1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->title }}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{$item->img_url}}" alt="">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->updated_at }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    {{-- <x-button type="button" wire:click.prevent="editProduct({{ $item->id }})">Edit
                                    </x-button>
                                    <x-button type="button" class="bg-red-500"
                                        wire:click.prevent="deleteConfirmation({{ $item->id }})">Delete
                                    </x-button> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-6">
                                    <span class="text-gray-500 p-6 text-base font-black">No data available!</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </x-card.body>
            @if ($sliders->total() > 10)
                <x-card.footer>
                    {{ $sliders->links() }}
                </x-card.footer>
            @endif

        </x-card>

    @endif




    @if ($create)
        @include('livewire.slider.create')
    @endif
    {{-- @if ($edit)
        @include('livewire.slider.edit')
    @endif --}}

</div>
