<div class="flex gap-6">
    <div class="w-4/5">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <x-label class="mb-2">Name</x-label>
                <x-input type="text" wire:model="name" class="w-full" placeholder="Enter name" />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="w-1/5">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <x-label class="mb-2">Partners Image</x-label>
                <x-input type="file" wire:model="img_url" class="w-full border-2 border-black" />
                @error('img_url')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                @if ($img_url)
                    <img src="{{$img_url->temporaryUrl()}}" alt="" class="rounded-md my-4 h-48 w-full">
                @elseif($editUpdateItem['img_url'] ?? '')
                    <img src="{{asset('storage')}}/{{ $editUpdateItem['img_url'] ?? ''}}" class="rounded-md my-4 h-48 w-full" alt="">
                @endif
            </div>
        </div>
    </div>
</div>

