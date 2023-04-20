import {computed, ref} from 'vue'
import {defineStore} from 'pinia'

export const useTodoStore = defineStore('todo',{
    state: () => ({
        todos: [
            'Go to the store',
            'Go to the bank',
            'Buy eggs',
        ]
    }),
})
