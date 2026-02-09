<script setup lang="ts">
defineProps<{
    title?: string
    submitLabel?: string
    cancelLabel?: string
}>()

const emit = defineEmits<{
    submit: []
    cancel: []
}>()
</script>

<template>
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <!-- Title -->
        <div v-if="title" class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-800">{{ title }}</h2>
        </div>

        <!-- Form content -->
        <form @submit.prevent="emit('submit')" class="px-6 py-4 space-y-4">
            <slot />

            <!-- Actions -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-200">
                <button
                    type="button"
                    @click="emit('cancel')"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                >
                    {{ cancelLabel ?? 'Cancelar' }}
                </button>
                <button
                    type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                >
                    {{ submitLabel ?? 'Guardar' }}
                </button>
            </div>
        </form>
    </div>
</template>
