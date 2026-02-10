<script setup lang="ts">
import AppInput from '@/components/base/AppInput.vue'
import AppSelect from '@/components/base/AppSelect.vue'
import type { SelectOption } from '@/components/base/AppSelect.vue'

withDefaults(defineProps<{
    label?: string
    type?: string
    placeholder?: string
    options?: SelectOption[]
    required?: boolean
    disabled?: boolean
    error?: string
    hint?: string
    id?: string
    name?: string
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
    font-size: 13px;
    font-weight: 600;
    color: var(--color-text-secondary);
    line-height: 1;
    padding-bottom: 2px;
}

.ff-required {
    color: var(--color-error);
    margin-left: 2px;
}

.ff-error {
    font-size: 12px;
    color: var(--color-error);
    margin: 0;
    line-height: 1.3;
}

.ff-hint {
    font-size: 12px;
    color: var(--color-border-secondary-hover);
    margin: 0;
    line-height: 1.3;
}

/* Error state — tint the inner input/select border */
.ff-field--error :deep(.ai-input),
.ff-field--error :deep(.as-select) {
    border-color: var(--color-error-light);
}
.ff-field--error :deep(.ai-input):focus,
.ff-field--error :deep(.as-select):focus {
    border-color: var(--color-error);
    box-shadow: 0 0 0 3px var(--shadow-focus-error);
}
</style>
