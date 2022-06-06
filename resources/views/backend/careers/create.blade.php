
<x-app-layout>
    <form action="{{route('career.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
    <x-card class="w-5/6 mx-auto min-h-card">
        <x-card.header>
            <h2>Career </h2>
            <div>
                <x-button wire:click.prevent="backItem()">Back</x-button>
            </div>
        </x-card.header>
        <x-card.body class="p-4">
                <div class="flex gap-6">
                    <div class="w-full">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12">
                                <x-label class="mb-2">Title</x-label>
                                <x-input type="text" name="title" class="w-full" placeholder="Enter  title" />
                                @error('title')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <x-label class="mb-2">Experience</x-label>
                                <x-input type="text" name="experience" class="w-full" placeholder="Enter  experience" />
                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <x-label class="mb-2">Deadline</x-label>
                                <x-input type="date" name="deadline" class="w-full" placeholder="Enter  designation" />
                                @error('designation')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-12">
                                <x-label class="mb-2">Job Description</x-label>
                                <textarea name="job_description" id="career-editor"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card.body>
            <x-card.footer class="flex items-center justify-end">
                <x-button type="submit" wire:click.prevent="saveNewItem()">Save</x-button>
            </x-card.footer>
        </x-card>
    </form>
</x-app-layout>
