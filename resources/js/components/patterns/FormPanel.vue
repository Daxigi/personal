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
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: 10px;
    overflow: hidden;
    box-shadow:
        0 1px 3px var(--shadow-card-sm),
        0 4px 16px var(--shadow-card-lg);
}

.fp-header {
    padding: 18px 24px;
    border-bottom: 1px solid var(--color-border-light);
}

.fp-title {
    font-size: 16px;
    font-weight: 700;
    color: var(--color-text-heading);
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
    border-top: 1px solid var(--color-border-lighter);
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
    color: var(--color-text-secondary);
    background: var(--color-surface);
    border-color: var(--color-border-secondary);
}
.fp-btn--cancel:hover {
    background: var(--color-surface-muted);
    border-color: var(--color-border-secondary-hover);
}

.fp-btn--submit {
    color: var(--color-surface);
    background: var(--color-primary);
    border-color: var(--color-primary);
    box-shadow: 0 1px 2px var(--shadow-primary-sm);
}
.fp-btn--submit:hover {
    background: var(--color-primary-hover);
    border-color: var(--color-primary-hover);
    box-shadow: 0 2px 6px var(--shadow-primary-md);
}

.fp-btn:focus-visible {
    outline: none;
    box-shadow: 0 0 0 3px var(--shadow-focus-ring);
}

@media (max-width: 640px) {
    .fp-header { padding: 14px 16px; }
    .fp-body { padding: 16px; }
}
</style>
