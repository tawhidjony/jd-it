<x-card>
    <x-card.header>
        <h2>Create Product</h2>
        <div>
            <x-button wire:click.prevent="backItem()">Back</x-button>
        </div>
    </x-card.header>
    <x-card.body class="p-4">
        <form>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <x-label class="mb-2">Title</x-label>
                    <x-input type="text" wire:model="title" class="w-full" placeholder="Enter slider title"  />
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-6">
                    <x-label class="mb-2">Slider Image</x-label>
                    <x-input type="file" wire:model="img_url" class="w-full border-2 border-black"  />
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    @if ($img_url)
                    Photo Preview:
                    <img src="{{ $img_url->temporaryUrl() }}">
                @endif
                </div>
            </div>
        </form>
    </x-card.body>
    <x-card.footer class="flex items-center justify-end">
        <x-button type="submit" wire:click.prevent="saveSlider()">Save</x-button>
    </x-card.footer>
</x-card>
