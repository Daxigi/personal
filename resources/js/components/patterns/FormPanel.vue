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
    <div class="fp-card">
        <!-- Title -->
        <div v-if="title" class="fp-header">
            <h2 class="fp-title">{{ title }}</h2>
        </div>

        <!-- Form content -->
        <form @submit.prevent="emit('submit')" class="fp-body">
            <slot />

            <!-- Actions -->
            <div class="fp-actions">
                <button
                    type="button"
                    class="fp-btn fp-btn--cancel"
                    @click="emit('cancel')"
                >
                    {{ cancelLabel ?? 'Cancelar' }}
                </button>
                <button
                    type="submit"
                    class="fp-btn fp-btn--submit"
                >
                    {{ submitLabel ?? 'Guardar' }}
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
.fp-card {
    background: #ffffff;
    border: 1px solid #dfe3ea;
    border-radius: 10px;
    overflow: hidden;
    box-shadow:
        0 1px 3px rgba(0, 0, 0, 0.04),
        0 4px 16px rgba(0, 0, 0, 0.025);
}

.fp-header {
    padding: 18px 24px;
    border-bottom: 1px solid #e5e7eb;
}

.fp-title {
    font-size: 16px;
    font-weight: 700;
    color: #111827;
    margin: 0;
    letter-spacing: -0.01em;
}

.fp-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.fp-actions {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    padding-top: 16px;
    border-top: 1px solid #eef1f5;
}

.fp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 36px;
    padding: 0 16px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.15s ease;
    border: 1.5px solid transparent;
}

.fp-btn--cancel {
    color: #374151;
    background: #ffffff;
    border-color: #d1d5db;
}
.fp-btn--cancel:hover {
    background: #f9fafb;
    border-color: #9ca3af;
}

.fp-btn--submit {
    color: #ffffff;
    background: #3b82f6;
    border-color: #3b82f6;
    box-shadow: 0 1px 2px rgba(59, 130, 246, 0.25);
}
.fp-btn--submit:hover {
    background: #2563eb;
    border-color: #2563eb;
    box-shadow: 0 2px 6px rgba(59, 130, 246, 0.35);
}

.fp-btn:focus-visible {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
}

@media (max-width: 640px) {
    .fp-header { padding: 14px 16px; }
    .fp-body { padding: 16px; }
}
</style>
