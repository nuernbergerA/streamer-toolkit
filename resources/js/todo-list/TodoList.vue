<script setup>
import { onMounted } from 'vue'
import { useTodoStore } from './useTodoStore'
const store = useTodoStore()

onMounted(() => console.log('ToDo component mounted!'))
</script>

<template>
    <div class="mt-4">
        <span> Todo List: </span>
        <ul class="ml-4 mt-2">
            <li v-for="todo in store.todos"> {{ todo }} </li>
        </ul>
    </div>
</template>
