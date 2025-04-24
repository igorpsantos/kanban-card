<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { ref, onMounted } from 'vue';
</script>

<template>

    <Head title="Teste Logcomex" />

    <AuthenticatedLayout>
        <h1 class="mx-auto max-w-7xl border-b border-primary text-2xl text-primary">
            Teste Logcomex
        </h1>
        
    </AuthenticatedLayout>
</template>
