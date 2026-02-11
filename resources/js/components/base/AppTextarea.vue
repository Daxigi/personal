<script setup lang="ts">
withDefaults(defineProps<{
    placeholder?: string
    disabled?: boolean
    readonly?: boolean
    required?: boolean
    id?: string
    name?: string
    rows?: number
}>(), {
    rows: 3,
})

const model = defineModel<string | null>()
</script>

<template>
    <textarea
        v-model="model"
        :placeholder="placeholder"
        :disabled="disabled"
        :readonly="readonly"
        :required="required"
        :id="id"
        :name="name"
        :rows="rows"
        class="at-textarea"
        :class="{ 'at-textarea--disabled': disabled, 'at-textarea--readonly': readonly }"
    />
</template>

<style scoped>
.at-textarea {
    width: 100%;
    padding: 8px 12px;
    font-size: var(--font-size-md);
    font-family: inherit;
    color: var(--color-text-default);
    background: var(--color-surface-input);
    border: var(--border-width-control) solid var(--color-border-input);
    border-radius: var(--radius-md);
    outline: none;
    transition: var(--transition-base);
    resize: vertical;
    line-height: var(--leading-normal);
}

.at-textarea::placeholder {
    color: var(--color-text-placeholder);
}

.at-textarea:hover:not(:disabled):not(:read-only) {
    border-color: var(--color-border-input-hover);
    background: var(--color-surface-input-hover);
}

.at-textarea:focus:not(:disabled):not(:read-only) {
    background: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px var(--shadow-focus-primary);
}

.at-textarea--disabled {
    opacity: var(--opacity-disabled);
    cursor: not-allowed;
}

.at-textarea--readonly {
    background: var(--color-surface-muted);
    cursor: default;
}
</style>
