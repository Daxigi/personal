<script setup lang="ts">
export interface SelectOption {
    value: string | number
    label: string
}

withDefaults(defineProps<{
    options: SelectOption[]
    placeholder?: string
    disabled?: boolean
    required?: boolean
    id?: string
    name?: string
}>(), {
    placeholder: 'Seleccionar...',
})

const model = defineModel<string | number | null>()
</script>

<template>
    <select
        v-model="model"
        :disabled="disabled"
        :required="required"
        :id="id"
        :name="name"
        class="as-select"
        :class="{ 'as-select--disabled': disabled, 'as-select--placeholder': model == null || model === '' }"
    >
        <option value="" disabled>{{ placeholder }}</option>
        <option
            v-for="opt in options"
            :key="opt.value"
            :value="opt.value"
        >
            {{ opt.label }}
        </option>
    </select>
</template>

<style scoped>
.as-select {
    width: 100%;
    height: var(--control-height);
    padding: 0 32px 0 12px;
    font-size: var(--font-size-md);
    color: var(--color-text-default);
    background: var(--color-surface-input);
    border: var(--border-width-control) solid var(--color-border-input);
    border-radius: var(--radius-md);
    outline: none;
    transition: var(--transition-base);
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%236b7280'%3E%3Cpath fill-rule='evenodd' d='M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z' clip-rule='evenodd'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 8px center;
    background-size: 16px;
}

.as-select--placeholder {
    color: var(--color-text-placeholder);
}

.as-select:hover:not(:disabled) {
    border-color: var(--color-border-input-hover);
    background-color: var(--color-surface-input-hover);
}

.as-select:focus:not(:disabled) {
    background-color: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px var(--shadow-focus-primary);
}

.as-select--disabled {
    opacity: var(--opacity-disabled);
    cursor: not-allowed;
}
</style>
