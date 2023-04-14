@props(['counter' => 0])

<div x-data="{
        counter: @js($counter),
        init() {
            this.showNote()
            this.$watch('counter', () => this.showNote())
        },
        increment() {
            this.counter++

            if(this.counter > 9) this.$refs.note.style.display = 'block'
        },
        decrement() {
            this.counter--
        },
        isCounterTooBig() {
            return this.counter > 2
        },
        showNote() {
            if(this.isCounterTooBig()) {
                this.$refs.note.style.display = 'block'
            } else {
                this.$refs.note.style.display = 'none'
            }
        }
    }">
    <button @click="decrement" type="button">-</button>
    <span x-text="counter"></span>
    <button @click="increment" type="button">+</button>
    <div x-ref="note" x-cloak>Its too big</div>
</div>
