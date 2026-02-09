<script setup lang="ts">
export interface Column {
    key: string
    label: string
    align?: 'left' | 'center' | 'right'
    sortable?: boolean
}

defineProps<{
    columns: Column[]
    data: Record<string, unknown>[]
    rowKey?: string
}>()

const emit = defineEmits<{
    sort: [column: string]
}>()

defineSlots<{
    header?: () => unknown
    cell?: (props: { column: Column; row: Record<string, unknown>; value: unknown }) => unknown
    actions?: (props: { row: Record<string, unknown> }) => unknown
    empty?: () => unknown
}>()

function alignClass(align?: string): string {
    if (align === 'center') return 'text-center'
    if (align === 'right') return 'text-right'
    return 'text-left'
}
</script>

<template>
    <div class="bg-white rounded-sm shadow-sm border border-gray-300 overflow-hidden">
        <!-- Header slot -->
        <div v-if="$slots.header" class="px-4 py-3 border-b border-gray-300">
            <slot name="header" />
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th
                            v-for="col in columns"
                            :key="col.key"
                            class="px-3 py-2.5 text-sm font-semibold text-gray-700 border-b border-r border-gray-300 last:border-r-0"
                            :class="[
                                alignClass(col.align),
                                col.sortable ? 'cursor-pointer hover:bg-gray-200 transition-colors' : ''
                            ]"
                            @click="col.sortable && emit('sort', col.key)"
                        >
                            <div class="flex items-center gap-1.5" :class="alignClass(col.align)">
                                <span>{{ col.label }}</span>
                                <span v-if="col.sortable" class="flex flex-col text-xs text-blue-600 leading-none">
                                    <span>▲</span>
                                    <span>▼</span>
                                </span>
                            </div>
                        </th>
                        <th
                            v-if="$slots.actions"
                            class="px-3 py-2.5 text-right text-sm font-semibold text-gray-700 border-b border-gray-300"
                        >
                            <!-- Espacio para acciones -->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(row, index) in data"
                        :key="rowKey ? String(row[rowKey]) : index"
                        class="hover:bg-blue-50 transition-colors"
                        :class="index % 2 === 0 ? 'bg-gray-50' : 'bg-white'"
                    >
                        <td
                            v-for="col in columns"
                            :key="col.key"
                            class="px-3 py-2 text-sm text-gray-800 border-b border-r border-gray-200 last:border-r-0"
                            :class="alignClass(col.align)"
                        >
                            <slot name="cell" :column="col" :row="row" :value="row[col.key]">
                                {{ row[col.key] }}
                            </slot>
                        </td>
                        <td v-if="$slots.actions" class="px-3 py-2 text-right border-b border-gray-200">
                            <slot name="actions" :row="row" />
                        </td>
                    </tr>
                    <tr v-if="data.length === 0">
                        <td
                            :colspan="columns.length + ($slots.actions ? 1 : 0)"
                            class="px-6 py-8 text-center text-sm text-gray-500"
                        >
                            <slot name="empty">
                                No se encontraron registros.
                            </slot>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>