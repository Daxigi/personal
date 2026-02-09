<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <Head title="Días Trabajados por Secretarías" />

    <AuthenticatedLayout>
        <h1 class="text-2xl font-bold text-gray-800">Días Trabajados por Secretarías</h1>
    </AuthenticatedLayout>
</template>
