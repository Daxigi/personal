<script setup lang="ts">
defineProps<{
    placeholder?: string
}>()

const model = defineModel<string>({ default: '' })
</script>

<template>
    <div class="relative">
        <svg
            class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400"
            fill="none" viewBox="0 0 24 24" stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input
            v-model="model"
            type="text"
            :placeholder="placeholder ?? 'Buscar...'"
            class="pl-9 pr-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-full"
        />
    </div>
</template>
