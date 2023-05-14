<template>
    <Head title="Coming Soon" />
    <AuthenticatedLayout>
      <div class="flex justify-center items-center h-screen">
        <h1 class="font-bold text-7xl text-gray-800 dark:text-gray-200 leading-tight">Coming Soon</h1>
      </div>
    </AuthenticatedLayout>
  </template>
  

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
</script>