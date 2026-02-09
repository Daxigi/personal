<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Jubilar" />

    <AuthenticatedLayout>
        <h1 class="text-2xl font-bold text-gray-800">Jubilar</h1>
    </AuthenticatedLayout>
</template>
