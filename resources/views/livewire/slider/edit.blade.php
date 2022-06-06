<x-card>
    <x-card.header>
        <h2>Edit Slider</h2>
        <div>
            <x-button wire:click.prevent="backItem()">Back</x-button>
        </div>
    </x-card.header>
    <x-card.body class="p-4">
        <form>
            @include('livewire.slider.form')
        </form>
    </x-card.body>
    <x-card.footer class="flex items-center justify-end">
        <x-button type="submit" wire:click.prevent="updateSlider({{$editUpdateItem['id']}})">Update</x-button>
    </x-card.footer>
</x-card>
