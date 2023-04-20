<script setup>
import { onMounted, ref } from 'vue'
import { useTodoStore } from './useTodoStore'
const store = useTodoStore()
onMounted(() => console.log('ToDo component mounted!'))
const todo = ref('')
const addTodo = () => {
    store.addTodo(todo.value)
    todo.value = ''
}
</script>

<template>
    <div class="mt-4">
        <span> Todo List: </span>
        <ul class="ml-4 mt-2">
            <li v-for="todo in store.todos">
                <input type="checkbox" v-model="todo.completed">
                <span class="ml-2" :class="{ 'line-through': todo.completed }">
                    {{ todo.text }}
                </span>
            </li>
        </ul>
        <input type="text" class="mt-4" v-model="todo" />
        <button
            class="ml-2 bg-blue-500 hover:bg-blue-600 rounded py-2 px-4 border-blue-700 border"
            @click="addTodo"
        > Add todo</button>
    </div>
</template>
