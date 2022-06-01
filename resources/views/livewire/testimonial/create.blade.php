<x-card>
    <x-card.header>
        <h2>Partners </h2>
        <div>
            <x-button wire:click.prevent="backItem()">Back</x-button>
        </div>
    </x-card.header>
    <x-card.body class="p-4">
        <form>
            @include('livewire.testimonial.form')
        </form>
    </x-card.body>
    <x-card.footer class="flex items-center justify-end">
        <x-button type="submit" wire:click.prevent="saveNewItem()">Save</x-button>
    </x-card.footer>
</x-card>
