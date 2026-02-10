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
    color: #1f2937;
    background: #f4f5f8;
    border: 1.5px solid #e0e4ea;
    border-radius: 6px;
    outline: none;
    transition: all 0.15s ease;
    line-height: 1;
}

.ai-input::placeholder {
    color: #a3aab8;
}

.ai-input:hover:not(:disabled):not(:read-only) {
    border-color: #c5cbd5;
    background: #eff0f4;
}

.ai-input:focus:not(:disabled):not(:read-only) {
    background: #fff;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12);
}

.ai-input--disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.ai-input--readonly {
    background: #f9fafb;
    cursor: default;
}
</style>
