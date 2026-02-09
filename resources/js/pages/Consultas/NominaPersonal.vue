<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Nómina Personal" />

    <AuthenticatedLayout>
        <h1 class="text-2xl font-bold text-gray-800">Nómina Personal</h1>
    </AuthenticatedLayout>
</template>
