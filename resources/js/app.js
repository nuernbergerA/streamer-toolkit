import Alpine from 'alpinejs'
import Counter from './alpine/counter'

window.Alpine = Alpine

Alpine.data('counter', Counter)

Alpine.start()
