<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl text-cyan-600">Role List</h2>
                    <a href="{{ route('roles.create') }}" class="p-2 text-white bg-indigo-600 border rounded">Create a
                        role</a>
                </div>
                @forelse ($roles as $key => $role)
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $role->name }}
                    </div>
                @empty
                    <div class="p-6 text-center bg-white border-b border-gray-200">
                        No Roles Found!
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
