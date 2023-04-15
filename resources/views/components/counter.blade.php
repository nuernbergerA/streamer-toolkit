@props(['counter' => 0])

<div x-data="counter(@js($counter))">
    <button @click="decrement" type="button">-</button>
    <span x-text="counter"></span>
    <button @click="increment" type="button">+</button>
    <div x-ref="note" x-cloak>Its too big</div>
</div>
