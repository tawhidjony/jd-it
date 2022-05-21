<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Roles Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Role Create
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="rolesForm" action="{{route('roles.store')}}" method="post">
                        @csrf
                        @include('backend.roles.form')
                        <div class="col-sm-2">
                            <button type="submit" class="p-2 text-white bg-indigo-600 border rounded">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
