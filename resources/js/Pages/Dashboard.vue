<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <h1 class="mx-auto max-w-7xl border-b border-primary text-2xl text-primary">
            Meus projetos
        </h1>
        <div class="mx-auto max-w-7xl bg-gray-300 shadow-sm sm:rounded-lg p-6 text-gray-900 m-10">
            You're logged in!
        </div>
    </AuthenticatedLayout>
</template>
