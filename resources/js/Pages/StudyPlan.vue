<template>
    <Head title="To Do List" />
  
    <AuthenticatedLayout>
      <h1 class="font-bold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        To Do List
      </h1>
  
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-4">
            <form @submit.prevent="form.post(route('study-plan.store'))">
              <input
                type="text"
                v-model="form.taskName"
                placeholder="Task name"
                class="border-2 border-gray-300 p-2 w-full mb-4"
              />
              <input
                type="datetime-local"
                v-model="form.taskTimestamp"
                class="border-2 border-gray-300 p-2 w-full mb-4"
              />
              <button
                type="submit"
                class="bg-primary text-white px-6 py-2 rounded font-medium"
              >
                Add Task
              </button>
            </form>
          </div>
  
          <div
            v-for="task in tasks"
            :key="task.id"
            class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-4"
          >
            <div class="flex justify-between items-center">
              <div>
                <h3 class="text-xl font-semibold text-white">{{ task.name }}</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                  {{ task.timestamp }}
                </p>
              </div>
              <div class="flex space-x-4">
                <button
                  @click="destroy(task.id)"
                  class="bg-red-500 px-6 py-2 rounded font-medium  bg-red-600 text-white hover:bg-red-500"
                >
                  Delete
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>
  
  <script>
  import { usePage } from "@inertiajs/inertia-vue3";
  import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
  import { Head } from "@inertiajs/vue3";
  import  { useForm } from '@inertiajs/inertia-vue3';
  import { Inertia } from '@inertiajs/inertia'
  
  export default {
    components: {
      AuthenticatedLayout,
      Head,
    },
  

    setup() {
      const form = useForm({
        taskName: '',
        taskTimestamp: ''
      })

      const destroy = (id) => {
        if (confirm('Are you sure you want to delete this task?')) {
          Inertia.delete(route('study-plan.destroy', id))
        }
      }

      return {
        form,
        destroy
      }
    },

    props: {
            tasks: Object
        },

      }
  </script>
  