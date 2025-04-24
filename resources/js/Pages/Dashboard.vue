<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { ref, onMounted } from 'vue';

    const projects = ref([]);

    onMounted(async () => {
        projects.value = await fetch('/api/projects').then(res => res.json());
    });
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <h1 class="mx-auto max-w-7xl border-b border-primary text-2xl text-primary">
            Teste
        </h1>
        <div class="grid grid-cols-3 gap-4 mx-auto max-w-7xl bg-gray-300 shadow-sm sm:rounded-lg p-6 text-gray-900 m-10">
            <div class="gap-4" v-for="project in projects" :key="project.id">
                <div class="w-64 flex-auto p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ project.name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ project.description }}</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Ver mais
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
