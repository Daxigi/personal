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
    color: #94a0b4;
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
    height: 36px;
    padding: 0 30px 0 34px;
    font-size: 13px;
    color: #1f2937;
    background: #f4f5f8;
    border: 1.5px solid #e0e4ea;
    border-radius: 8px;
    outline: none;
    transition: all 0.15s ease;
}
.sf-input::placeholder {
    color: #a3aab8;
}
.sf-input:hover {
    border-color: #c5cbd5;
    background: #eff0f4;
}
.sf-input:focus {
    background: #fff;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12);
}

.sf-clear {
    position: absolute;
    right: 6px;
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #9ca3b0;
    background: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding: 0;
    transition: all 0.15s;
}
.sf-clear svg {
    width: 14px;
    height: 14px;
}
.sf-clear:hover {
    color: #4b5060;
    background: #e8eaee;
}
</style>
