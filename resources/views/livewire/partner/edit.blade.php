<x-card>
    <x-card.header>
        <h2>Edit Partners</h2>
        <div>
            <x-button wire:click.prevent="backItem()">Back</x-button>
        </div>
    </x-card.header>
    <x-card.body class="p-4">
        <form>
            @include('livewire.partner.form')
        </form>
    </x-card.body>
    <x-card.footer class="flex items-center justify-end">
        <x-button type="submit" wire:click.prevent="updateSingleItem({{$editUpdateItem['id']}})">Update</x-button>
    </x-card.footer>
</x-card>
