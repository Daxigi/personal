<script setup lang="ts">
withDefaults(defineProps<{
    type?: string
    placeholder?: string
    disabled?: boolean
    readonly?: boolean
    required?: boolean
    id?: string
    name?: string
}>(), {
    type: 'text',
})

const model = defineModel<string | number | null>()
</script>

<template>
    <input
        v-model="model"
        :type="type"
        :placeholder="placeholder"
        :disabled="disabled"
        :readonly="readonly"
        :required="required"
        :id="id"
        :name="name"
        class="ai-input"
        :class="{ 'ai-input--disabled': disabled, 'ai-input--readonly': readonly }"
    />
</template>

<style scoped>
.ai-input {
    width: 100%;
    height: 36px;
    padding: 0 12px;
    font-size: 13.5px;
    color: var(--color-text-default);
    background: var(--color-surface-input);
    border: 1.5px solid var(--color-border-input);
    border-radius: 6px;
    outline: none;
    transition: all 0.15s ease;
    line-height: 1;
}

.ai-input::placeholder {
    color: var(--color-text-placeholder);
}

.ai-input:hover:not(:disabled):not(:read-only) {
    border-color: var(--color-border-input-hover);
    background: var(--color-surface-input-hover);
}

.ai-input:focus:not(:disabled):not(:read-only) {
    background: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px var(--shadow-focus-primary);
}

.ai-input--disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.ai-input--readonly {
    background: var(--color-surface-muted);
    cursor: default;
}
</style>
