<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3>Alpine</h3>
                <div class="mt-4" x-data="{
                    todo: '',
                    todos: [],
                }">
                    <span> Todo List: </span>
                    <ul class="ml-4 mt-2">
                        <template x-for="todo in todos">
                            <li>
                                <input type="checkbox" x-model="todo.completed">
                                <span class="ml-2" :class="{ 'line-through': todo.completed }" x-text="todo.text"></span>
                            </li>
                        </template>
                    </ul>
                    <input type="text" class="mt-4" x-model="todo" />
                    <button
                        class="ml-2 bg-blue-500 hover:bg-blue-600 rounded py-2 px-4 border-blue-700 border"
                        @click="addTodo"
                    > Add todo</button>
                </div>

                <hr>

                <h3>Vue.js</h3>
                <div id="todo-list"></div>
            </div>
        </div>
    </div>
</x-app-layout>
