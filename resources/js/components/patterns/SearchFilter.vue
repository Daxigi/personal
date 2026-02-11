<script setup lang="ts">
defineProps<{
    placeholder?: string
}>()

const model = defineModel<string>({ default: '' })
</script>

<template>
    <div class="sf-wrapper">
        <div class="sf-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <input
            v-model="model"
            type="text"
            :placeholder="placeholder ?? 'Buscar...'"
            class="sf-input"
        />
        <button
            v-if="model"
            class="sf-clear"
            @click="model = ''"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
            </svg>
        </button>
    </div>
</template>

<style scoped>
.sf-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.sf-icon {
    position: absolute;
    left: 11px;
    width: 15px;
    height: 15px;
    color: var(--color-text-icon);
    pointer-events: none;
    display: flex;
    align-items: center;
}
.sf-icon svg {
    width: 15px;
    height: 15px;
}

.sf-input {
    width: 100%;
    height: var(--control-height);
    padding: 0 30px 0 34px;
    font-size: var(--font-size-base);
    color: var(--color-text-default);
    background: var(--color-surface-input);
    border: var(--border-width-control) solid var(--color-border-input);
    border-radius: var(--radius-lg);
    outline: none;
    transition: var(--transition-base);
}
.sf-input::placeholder {
    color: var(--color-text-placeholder);
}
.sf-input:hover {
    border-color: var(--color-border-input-hover);
    background: var(--color-surface-input-hover);
}
.sf-input:focus {
    background: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px var(--shadow-focus-primary);
}

.sf-clear {
    position: absolute;
    right: 6px;
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-text-placeholder);
    background: none;
    border: none;
    border-radius: var(--radius-sm);
    cursor: pointer;
    padding: 0;
    transition: var(--transition-base);
}
.sf-clear svg {
    width: 14px;
    height: 14px;
}
.sf-clear:hover {
    color: var(--color-text-secondary);
    background: var(--color-surface-section);
}
</style>
