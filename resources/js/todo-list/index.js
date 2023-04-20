import { createApp } from 'vue'
import { createPinia } from 'pinia'

import TodoList from "./TodoList.vue"

const app = createApp({
    template: `<todo-list />`
})

const pinia = createPinia()
app.use(pinia)

app.component('TodoList', TodoList)

const el = document.getElementById('todo-list')
if (el) {
    app.mount(el)
}
