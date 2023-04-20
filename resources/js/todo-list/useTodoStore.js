import {defineStore} from 'pinia'

export const useTodoStore = defineStore('todo',{
    state: () => ({
        todos: [
            { text: 'Go to the store', completed: true },
            { text: 'Go to the bank', completed: false },
            { text: 'Buy eggs', completed: false },
        ]
    }),
    actions: {
        addTodo(text) {
            this.todos.push({text, completed: false,})
        },
    },
})
