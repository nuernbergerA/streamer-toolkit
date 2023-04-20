import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('counter', (initialCount) => ({
    counter: initialCount,
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
}));

Alpine.start();
