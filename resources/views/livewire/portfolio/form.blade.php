<div class="grid grid-cols-12 gap-4">
    <div class="col-span-6">
        <x-label class="mb-2">Name</x-label>
        <x-input type="text" wire:model="name" class="w-full" placeholder="Enter portfolio name" />
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-span-6">
        <x-label class="mb-2">Portfolio Image</x-label>
        <x-input type="file" wire:model="img_url" class="w-full border-2 border-black" />
        @error('img_url')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        @if ($img_url)
            <img src="{{$img_url->temporaryUrl()}}" alt="" class="rounded-md my-4 h-48">
        @else
            <img src="{{asset('storage')}}/{{ $editUpdateItem['img_url'] ?? ''}}" class="rounded-md my-4 h-48" alt="">
        @endif
    </div>
</div>
