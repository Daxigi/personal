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
    color: #ffffff;
    background: #3b82f6;
    border-color: #3b82f6;
    box-shadow: 0 1px 2px rgba(59, 130, 246, 0.25);
}
.ab-btn--primary:hover:not(:disabled) {
    background: #2563eb;
    border-color: #2563eb;
    box-shadow: 0 2px 6px rgba(59, 130, 246, 0.35);
}
.ab-btn--primary:active:not(:disabled) {
    background: #1d4ed8;
    transform: translateY(0.5px);
}

/* Secondary */
.ab-btn--secondary {
    color: #374151;
    background: #ffffff;
    border-color: #d1d5db;
}
.ab-btn--secondary:hover:not(:disabled) {
    background: #f9fafb;
    border-color: #9ca3af;
}
.ab-btn--secondary:active:not(:disabled) {
    background: #f3f4f6;
    transform: translateY(0.5px);
}

/* Ghost */
.ab-btn--ghost {
    color: #6b7280;
    background: transparent;
    border-color: transparent;
}
.ab-btn--ghost:hover:not(:disabled) {
    color: #374151;
    background: #f3f4f6;
}
.ab-btn--ghost:active:not(:disabled) {
    background: #e5e7eb;
    transform: translateY(0.5px);
}

/* Focus ring (all variants) */
.ab-btn:focus-visible {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
}

/* Disabled */
.ab-btn--disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
