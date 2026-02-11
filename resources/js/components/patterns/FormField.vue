<script setup lang="ts">
import AppInput from '@/components/base/AppInput.vue'
import AppSelect from '@/components/base/AppSelect.vue'
import AppTextarea from '@/components/base/AppTextarea.vue'
import type { SelectOption } from '@/components/base/AppSelect.vue'

withDefaults(defineProps<{
    label?: string
    type?: string
    placeholder?: string
    options?: SelectOption[]
    required?: boolean
    disabled?: boolean
    readonly?: boolean
    error?: string
    hint?: string
    id?: string
    name?: string
    rows?: number
}>(), {
    type: 'text',
})

const model = defineModel<string | number | null>()
</script>

<template>
    <div class="ff-field" :class="{ 'ff-field--error': error }">
        <label v-if="label" class="ff-label" :for="id">
            {{ label }}
            <span v-if="required" class="ff-required">*</span>
        </label>

        <AppSelect
            v-if="type === 'select'"
            v-model="model"
            :options="options ?? []"
            :placeholder="placeholder"
            :disabled="disabled"
            :required="required"
            :id="id"
            :name="name"
        />
        <AppTextarea
            v-else-if="type === 'textarea'"
            v-model="model"
            :placeholder="placeholder"
            :disabled="disabled"
            :readonly="readonly"
            :required="required"
            :id="id"
            :name="name"
            :rows="rows"
        />
        <span v-else-if="readonly" class="ff-readonly">{{ model }}</span>
        <AppInput
            v-else
            v-model="model"
            :type="type"
            :placeholder="placeholder"
            :disabled="disabled"
            :required="required"
            :id="id"
            :name="name"
        />

        <p v-if="error" class="ff-error">{{ error }}</p>
        <p v-else-if="hint" class="ff-hint">{{ hint }}</p>
    </div>
</template>

<style scoped>
.ff-field {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.ff-label {
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-secondary);
    line-height: var(--leading-none);
    background: var(--color-surface-section);
    padding: 4px 8px;
    border-radius: var(--radius-sm);
    align-self: flex-start;
}

.ff-required {
    color: var(--color-error);
    margin-left: 2px;
}

.ff-error {
    font-size: var(--font-size-xs);
    color: var(--color-error);
    margin: 0;
    line-height: var(--leading-snug);
}

.ff-hint {
    font-size: var(--font-size-xs);
    color: var(--color-border-secondary-hover);
    margin: 0;
    line-height: var(--leading-snug);
}

.ff-readonly {
    display: block;
    width: 100%;
    min-height: var(--control-height);
    padding: 0 12px;
    font-size: var(--font-size-md);
    color: var(--color-text-muted);
    background: var(--color-surface-muted);
    border: var(--border-width-control) solid var(--color-border-input);
    border-radius: var(--radius-md);
    line-height: var(--control-height);
}

/* Error state — tint the inner input/select/textarea border */
.ff-field--error :deep(.ai-input),
.ff-field--error :deep(.as-select),
.ff-field--error :deep(.at-textarea) {
    border-color: var(--color-error-light);
}
.ff-field--error :deep(.ai-input):focus,
.ff-field--error :deep(.as-select):focus,
.ff-field--error :deep(.at-textarea):focus {
    border-color: var(--color-error);
    box-shadow: 0 0 0 3px var(--shadow-focus-error);
}
</style>
