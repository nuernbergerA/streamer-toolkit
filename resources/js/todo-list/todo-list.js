import { createApp } from 'vue'
import TodoList from "./TodoList.vue"
const app = createApp({})
app.component('TodoList', TodoList)

const el = document.getElementById('todo-list')
if (el) {
    app.mount(el)
} else {
    console.log('no div for that :)')
}
