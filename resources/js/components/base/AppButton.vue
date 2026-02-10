<script setup lang="ts">
withDefaults(defineProps<{
    type?: 'button' | 'submit' | 'reset'
    variant?: 'primary' | 'secondary' | 'ghost'
    disabled?: boolean
}>(), {
    type: 'button',
    variant: 'primary',
})
</script>

<template>
    <button
        :type="type"
        :disabled="disabled"
        class="ab-btn"
        :class="[
            `ab-btn--${variant}`,
            { 'ab-btn--disabled': disabled }
        ]"
    >
        <slot />
    </button>
</template>

<style scoped>
.ab-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    height: 36px;
    padding: 0 16px;
    font-size: 13px;
    font-weight: 600;
    border: 1.5px solid transparent;
    border-radius: 8px;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.15s ease;
    line-height: 1;
}

/* Primary */
.ab-btn--primary {
    color: var(--color-surface);
    background: var(--color-primary);
    border-color: var(--color-primary);
    box-shadow: 0 1px 2px var(--shadow-primary-sm);
}
.ab-btn--primary:hover:not(:disabled) {
    background: var(--color-primary-hover);
    border-color: var(--color-primary-hover);
    box-shadow: 0 2px 6px var(--shadow-primary-md);
}
.ab-btn--primary:active:not(:disabled) {
    background: var(--color-primary-active);
    transform: translateY(0.5px);
}

/* Secondary */
.ab-btn--secondary {
    color: var(--color-text-secondary);
    background: var(--color-surface);
    border-color: var(--color-border-secondary);
}
.ab-btn--secondary:hover:not(:disabled) {
    background: var(--color-surface-muted);
    border-color: var(--color-border-secondary-hover);
}
.ab-btn--secondary:active:not(:disabled) {
    background: var(--color-surface-subtle);
    transform: translateY(0.5px);
}

/* Ghost */
.ab-btn--ghost {
    color: var(--color-text-muted);
    background: transparent;
    border-color: transparent;
}
.ab-btn--ghost:hover:not(:disabled) {
    color: var(--color-text-secondary);
    background: var(--color-surface-subtle);
}
.ab-btn--ghost:active:not(:disabled) {
    background: var(--color-border-light);
    transform: translateY(0.5px);
}

/* Focus ring (all variants) */
.ab-btn:focus-visible {
    outline: none;
    box-shadow: 0 0 0 3px var(--shadow-focus-ring);
}

/* Disabled */
.ab-btn--disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
