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
                    type="submit"
                    class="fp-btn fp-btn--submit"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="fp-btn-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M15.5 2H4.5A2.5 2.5 0 002 4.5v11A2.5 2.5 0 004.5 18h11a2.5 2.5 0 002.5-2.5V6.621a2.5 2.5 0 00-.732-1.768l-2.121-2.121A2.5 2.5 0 0013.379 2H15.5zM6 3.5h5v3H6v-3zm4 13a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/>
                    </svg>
                    {{ submitLabel ?? 'Grabar' }}
                </button>
                <button
                    type="button"
                    class="fp-btn fp-btn--cancel"
                    @click="emit('cancel')"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="fp-btn-icon fp-btn-icon--green" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 01-.025 1.06L3.622 7.25h10.628a5.25 5.25 0 010 10.5H12a.75.75 0 010-1.5h2.25a3.75 3.75 0 000-7.5H3.622l4.146 3.957a.75.75 0 01-1.036 1.085l-5.5-5.25a.75.75 0 010-1.085l5.5-5.25a.75.75 0 011.06.025z" clip-rule="evenodd"/>
                    </svg>
                    {{ cancelLabel ?? 'Cancelar' }}
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
.fp-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
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
    font-size: var(--font-size-xl);
    font-weight: var(--font-weight-bold);
    color: var(--color-text-heading);
    margin: 0;
    letter-spacing: var(--tracking-snug);
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
    height: var(--control-height);
    padding: 0 16px;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    border-radius: var(--radius-lg);
    cursor: pointer;
    white-space: nowrap;
    transition: var(--transition-base);
    border: var(--border-width-control) solid transparent;
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

.fp-btn-icon {
    width: 15px;
    height: 15px;
    margin-right: 5px;
    flex-shrink: 0;
}

.fp-btn-icon--green {
    color: var(--color-success, #22c55e);
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
