<script setup lang="ts">
import { computed } from 'vue'

export interface Tab {
    key: string
    label: string
}

const props = defineProps<{
    tabs: Tab[]
}>()

const activeTab = defineModel<string>()

const currentTab = computed(() => activeTab.value || props.tabs[0]?.key)
</script>

<template>
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <!-- Tab navigation -->
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px px-6">
                <button
                    v-for="tab in tabs"
                    :key="tab.key"
                    @click="activeTab = tab.key"
                    class="px-4 py-3 text-sm font-medium border-b-2 transition-colors whitespace-nowrap"
                    :class="currentTab === tab.key
                        ? 'border-blue-500 text-blue-600'
                        : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                >
                    {{ tab.label }}
                </button>
            </nav>
        </div>

        <!-- Tab content -->
        <div class="p-6">
            <template v-for="tab in tabs" :key="tab.key">
                <div v-show="currentTab === tab.key">
                    <slot :name="tab.key" />
                </div>
            </template>
        </div>
    </div>
</template>
