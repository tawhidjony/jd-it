<div class="flex gap-6">
    <div class="w-full">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <x-label class="mb-2">Title</x-label>
                <x-input type="text" wire:model="title" class="w-full" placeholder="Enter  title" />
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-6">
                <x-label class="mb-2">Experience</x-label>
                <x-input type="text" wire:model="experience" class="w-full" placeholder="Enter  experience" />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-6">
                <x-label class="mb-2">Deadline</x-label>
                <x-input type="date" wire:model="deadline" class="w-full" placeholder="Enter  designation" />
                @error('designation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12">
                <x-label class="mb-2">Job Description</x-label>
               <textarea id="editor" rows="5" cols="3" placeholder="Enter job description" class="border w-full rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                @error('designation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>

        </div>
    </div>
</div>
