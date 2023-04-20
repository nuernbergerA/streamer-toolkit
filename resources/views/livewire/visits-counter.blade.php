<div class="mt-10">

    {{ $this->count }}

    <button class="bg-blue-100 py-2 px-4 rounded" wire:click="increment">+</button>

    <div class="mt-5" x-data="{ jscount: 4 }">

        <button @click="$wire.increment(jscount)" class="bg-blue-100 py-2 px-4 rounded">
            Alpine +
        </button>
    </div>

</div>
