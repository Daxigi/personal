<script setup lang="ts">
import { computed, ref, watch } from 'vue'

export interface Column {
    key: string
    label: string
    align?: 'left' | 'center' | 'right'
    sortable?: boolean
    width?: string
    bold?: boolean
}

const props = withDefaults(defineProps<{
    columns: Column[]
    data: Record<string, unknown>[]
    rowKey?: string
    title?: string
    pagination?: boolean
    itemsPerPage?: number
    searchable?: boolean
    searchPlaceholder?: string
    addLabel?: string
    striped?: boolean
}>(), {
    pagination: false,
    itemsPerPage: 50,
    searchable: true,
    searchPlaceholder: 'Filtrar...',
    striped: true,
})

const emit = defineEmits<{
    sort: [column: string]
    search: [query: string]
    add: []
}>()

defineSlots<{
    cell?: (props: { column: Column; row: Record<string, unknown>; value: unknown }) => unknown
    actions?: (props: { row: Record<string, unknown> }) => unknown
    empty?: () => unknown
    'header-actions'?: () => unknown
}>()

// Sort state
const sortKey = ref<string | null>(null)
const sortOrder = ref<'asc' | 'desc'>('asc')

function handleSort(col: Column) {
    if (!col.sortable) return
    if (sortKey.value === col.key) {
        sortOrder.value = sortOrder.value === 'asc' ? 'desc' : 'asc'
    } else {
        sortKey.value = col.key
        sortOrder.value = 'asc'
    }
    emit('sort', col.key)
}

function alignClass(align?: string): string {
    if (align === 'center') return 'text-center'
    if (align === 'right') return 'text-right'
    return 'text-left'
}

function justifyClass(align?: string): string {
    if (align === 'center') return 'justify-center'
    if (align === 'right') return 'justify-end'
    return 'justify-start'
}

// Search
const searchQuery = ref('')

watch(searchQuery, (val) => {
    emit('search', val)
    currentPage.value = 1
})

const filteredData = computed(() => {
    let result = props.data

    // 1. Filter by search query
    if (props.searchable && searchQuery.value.trim()) {
        const q = searchQuery.value.toLowerCase().trim()
        result = result.filter(row =>
            props.columns.some(col => {
                const val = row[col.key]
                return val != null && String(val).toLowerCase().includes(q)
            })
        )
    }

    // 2. Sort by active column
    if (sortKey.value) {
        const key = sortKey.value
        const dir = sortOrder.value === 'asc' ? 1 : -1
        result = [...result].sort((a, b) => {
            const valA = a[key]
            const valB = b[key]
            if (valA == null) return 1
            if (valB == null) return -1
            if (valA < valB) return -1 * dir
            if (valA > valB) return 1 * dir
            return 0
        })
    }

    return result
})

// Pagination
const currentPage = ref(1)

watch(() => props.data, () => {
    currentPage.value = 1
})

const totalPages = computed(() => {
    if (!props.pagination) return 1
    return Math.max(1, Math.ceil(filteredData.value.length / props.itemsPerPage))
})

const displayedData = computed(() => {
    if (!props.pagination) return filteredData.value
    const start = (currentPage.value - 1) * props.itemsPerPage
    const end = start + props.itemsPerPage
    return filteredData.value.slice(start, end)
})

const paginationInfo = computed(() => {
    const total = filteredData.value.length
    if (!props.pagination || total === 0) return ''
    const start = (currentPage.value - 1) * props.itemsPerPage + 1
    const end = Math.min(currentPage.value * props.itemsPerPage, total)
    return `${start}–${end} de ${total}`
})

const visiblePages = computed(() => {
    const total = totalPages.value
    const current = currentPage.value
    const delta = 1
    const range: (number | string)[] = []

    for (let i = 1; i <= total; i++) {
        if (
            i === 1 ||
            i === total ||
            (i >= current - delta && i <= current + delta)
        ) {
            range.push(i)
        } else if (
            range[range.length - 1] !== '...' &&
            (i < current - delta || i > current + delta)
        ) {
            range.push('...')
        }
    }
    return range
})

function goToPage(page: number | string) {
    if (typeof page === 'number' && page >= 1 && page <= totalPages.value) {
        currentPage.value = page
    }
}
</script>

<template>
    <div class="dt-card">
        <!-- ─── Header: Título + buscador + acciones ─── -->
        <div class="dt-header">
            <div class="dt-header-row">
                <h3 v-if="title" class="dt-title">{{ title }}</h3>
                <div class="dt-header-controls">
                    <slot name="header-actions" />
                    <!-- Search -->
                    <div v-if="searchable" class="dt-search">
                        <div class="dt-search-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            v-model="searchQuery"
                            type="text"
                            :placeholder="searchPlaceholder"
                            class="dt-search-input"
                        />
                        <button
                            v-if="searchQuery"
                            class="dt-search-clear"
                            @click="searchQuery = ''"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>
                        </button>
                    </div>
                    <!-- Botón Agregar -->
                    <button
                        v-if="addLabel"
                        class="dt-add-btn"
                        @click="emit('add')"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="dt-add-icon">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                        {{ addLabel }}
                    </button>
                </div>
            </div>
        </div>

        <!-- ─── Table ─── -->
        <div class="dt-body">
            <div class="dt-table-scroll">
                <table class="dt-table">
                    <thead>
                        <tr>
                            <th
                                v-for="col in columns"
                                :key="col.key"
                                :style="col.width ? { width: col.width } : {}"
                                :class="[
                                    'dt-th',
                                    alignClass(col.align),
                                    { 'dt-th--sortable': col.sortable }
                                ]"
                                @click="handleSort(col)"
                            >
                                <div class="dt-th-inner" :class="justifyClass(col.align)">
                                    <span>{{ col.label }}</span>
                                    <span v-if="col.sortable" class="dt-sort-icon">
                                        <svg v-if="sortKey !== col.key" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="dt-sort-neutral">
                                            <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" />
                                        </svg>
                                        <svg v-else-if="sortOrder === 'asc'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="dt-sort-active">
                                            <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                        <svg v-else xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="dt-sort-active">
                                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </th>
                            <th v-if="$slots.actions" class="dt-th dt-th--actions text-right">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="(row, index) in displayedData"
                            :key="rowKey ? String(row[rowKey]) : index"
                            class="dt-row"
                            :class="{ 'dt-row--striped': striped && index % 2 === 1 }"
                        >
                            <td
                                v-for="col in columns"
                                :key="col.key"
                                class="dt-td"
                                :class="[alignClass(col.align), { 'dt-td--bold': col.bold }]"
                            >
                                <slot name="cell" :column="col" :row="row" :value="row[col.key]">
                                    {{ row[col.key] ?? '—' }}
                                </slot>
                            </td>
                            <td v-if="$slots.actions" class="dt-td dt-td--actions text-right">
                                <slot name="actions" :row="row" />
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Empty state -->
                <div v-if="filteredData.length === 0" class="dt-empty">
                    <slot name="empty">
                        <div class="dt-empty-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="dt-empty-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                            <p class="dt-empty-text">No se encontraron registros</p>
                            <p v-if="searchQuery" class="dt-empty-sub">
                                Intentá con otros términos de búsqueda
                            </p>
                        </div>
                    </slot>
                </div>
            </div>
        </div>

        <!-- ─── Footer / Pagination ─── -->
        <div v-if="pagination && filteredData.length > 0" class="dt-footer">
            <span class="dt-footer-info">{{ paginationInfo }}</span>
            <div v-if="totalPages > 1" class="dt-pagination">
                <button
                    class="dt-pg-btn dt-pg-nav"
                    :disabled="currentPage === 1"
                    @click="goToPage(currentPage - 1)"
                    aria-label="Anterior"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </button>

                <template v-for="(page, idx) in visiblePages" :key="idx">
                    <button
                        v-if="page !== '...'"
                        class="dt-pg-btn"
                        :class="{ 'dt-pg-btn--active': currentPage === page }"
                        @click="goToPage(page)"
                    >
                        {{ page }}
                    </button>
                    <span v-else class="dt-pg-dots">···</span>
                </template>

                <button
                    class="dt-pg-btn dt-pg-nav"
                    :disabled="currentPage === totalPages"
                    @click="goToPage(currentPage + 1)"
                    aria-label="Siguiente"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* ═══════════════════════════════════════════
   DataTable — Componente reutilizable
   Sistema Municipal
   ═══════════════════════════════════════════ */

/* ─── Card wrapper ─── */
.dt-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow:
        0 1px 3px var(--shadow-card-sm),
        0 4px 16px var(--shadow-card-lg);
}

/* ─── Header ─── */
.dt-header {
    padding: 18px 24px 16px;
}

.dt-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
}

.dt-title {
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    color: var(--color-text-heading);
    margin: 0;
    letter-spacing: var(--tracking-tight);
    white-space: nowrap;
}

.dt-header-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
}

/* ─── Search field ─── */
.dt-search {
    position: relative;
    display: flex;
    align-items: center;
}

.dt-search-icon {
    position: absolute;
    left: 11px;
    width: 15px;
    height: 15px;
    color: var(--color-text-icon);
    pointer-events: none;
    display: flex;
    align-items: center;
}
.dt-search-icon svg { width: 15px; height: 15px; }

.dt-search-input {
    width: 210px;
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
.dt-search-input::placeholder { color: var(--color-text-placeholder); }
.dt-search-input:hover {
    border-color: var(--color-border-input-hover);
    background: var(--color-surface-input-hover);
}
.dt-search-input:focus {
    background: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px var(--shadow-focus-primary);
}

.dt-search-clear {
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
.dt-search-clear svg { width: 14px; height: 14px; }
.dt-search-clear:hover {
    color: var(--color-text-secondary);
    background: var(--color-surface-section);
}

/* ─── Add button ─── */
.dt-add-btn {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    height: var(--control-height);
    padding: 0 16px;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    color: var(--color-surface);
    background: var(--color-primary);
    border: none;
    border-radius: var(--radius-lg);
    cursor: pointer;
    white-space: nowrap;
    transition: var(--transition-base);
    box-shadow: 0 1px 2px var(--shadow-primary-sm);
}
.dt-add-btn:hover {
    background: var(--color-primary-hover);
    box-shadow: 0 2px 6px var(--shadow-primary-md);
}
.dt-add-btn:active {
    background: var(--color-primary-active);
    transform: translateY(0.5px);
}
.dt-add-icon { width: 16px; height: 16px; }

/* ─── Table body area (márgenes internos) ─── */
.dt-body {
    padding: 0 16px 16px;
}

.dt-table-scroll {
    overflow-x: auto;
    overflow-y: auto;
    border: 1px solid var(--color-border-light);
    border-radius: var(--radius-md);
    max-height: 600px; /* Aprox 10 rows + header */
}

/* ─── Table ─── */
.dt-table {
    width: 100%;
    border-collapse: separate; /* Required for sticky header border */
    border-spacing: 0;
}

/* ─── Table head ─── */
.dt-th {
    padding: 10px 18px;
    font-size: var(--font-size-2xs);
    font-weight: var(--font-weight-bold);
    color: var(--color-text-table-head);
    text-transform: uppercase;
    letter-spacing: var(--tracking-wide);
    background: var(--color-surface-table-head);
    border-bottom: 2px solid var(--color-border-table-head);
    white-space: nowrap;
    user-select: none;
    position: sticky;
    top: 0;
    z-index: 10;
}

.dt-th--sortable {
    cursor: pointer;
    transition: background 0.15s, color 0.15s;
}
.dt-th--sortable:hover {
    background: var(--color-border-table-head);
    color: var(--color-primary-dark);
}

.dt-th--actions {
    width: 1%;
    color: var(--color-text-placeholder);
    font-weight: var(--font-weight-semibold);
}

.dt-th-inner {
    display: flex;
    align-items: center;
    gap: 4px;
}

/* ─── Sort icons ─── */
.dt-sort-icon {
    display: inline-flex;
    align-items: center;
    width: 14px;
    height: 14px;
    flex-shrink: 0;
}
.dt-sort-icon svg { width: 14px; height: 14px; }

.dt-sort-neutral { opacity: 0.3; transition: opacity 0.15s; }
.dt-th--sortable:hover .dt-sort-neutral { opacity: 0.55; }
.dt-sort-active { color: var(--color-primary-dark); opacity: 1; }

/* ─── Table rows ─── */
.dt-row {
    transition: background 0.1s ease;
}

.dt-row--striped {
    background: var(--color-surface-striped);
}

.dt-row:hover {
    background: var(--color-primary-bg);
}

.dt-row .dt-td {
    border-bottom: 1px solid var(--color-border-row);
}
.dt-row:last-child .dt-td {
    border-bottom: none;
}

/* ─── Table cells ─── */
.dt-td {
    padding: 10px 18px;
    font-size: var(--font-size-md);
    color: var(--color-text-body);
    line-height: var(--leading-relaxed);
    font-weight: var(--font-weight-normal);
    border-right: 1px solid var(--color-border-row);
}
.dt-td:last-child {
    border-right: none;
}

.dt-td--bold {
    font-weight: var(--font-weight-bold);
}

.dt-td--actions {
    white-space: nowrap;
}

/* ─── Empty state ─── */
.dt-empty {
    padding: 52px 24px;
    display: flex;
    justify-content: center;
}
.dt-empty-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
}
.dt-empty-icon {
    width: 42px;
    height: 42px;
    color: var(--color-text-disabled);
    margin-bottom: 6px;
}
.dt-empty-text {
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-table-head);
    margin: 0;
}
.dt-empty-sub {
    font-size: var(--font-size-sm);
    color: var(--color-text-placeholder);
    margin: 0;
}

/* ─── Footer ─── */
.dt-footer {
    padding: 12px 24px;
    border-top: 1px solid var(--color-border-lighter);
    background: var(--color-surface-footer);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.dt-footer-info {
    font-size: var(--font-size-sm);
    color: var(--color-text-footer);
    font-weight: var(--font-weight-normal);
    font-variant-numeric: tabular-nums;
}

/* ─── Pagination ─── */
.dt-pagination {
    display: flex;
    align-items: center;
    gap: 3px;
}

.dt-pg-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    height: 32px;
    padding: 0 6px;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-normal);
    color: var(--color-text-secondary);
    background: transparent;
    border: 1px solid transparent;
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: var(--transition-base);
    font-variant-numeric: tabular-nums;
}

.dt-pg-btn:hover:not(:disabled):not(.dt-pg-btn--active) {
    background: var(--color-surface-table-head);
    color: var(--color-text-body);
}

.dt-pg-btn--active {
    background: var(--color-primary);
    color: var(--color-surface);
    border-color: var(--color-primary);
    box-shadow: 0 1px 3px var(--shadow-focus-ring);
    font-weight: var(--font-weight-semibold);
}

.dt-pg-nav {
    color: var(--color-text-table-head);
}
.dt-pg-nav svg { width: 16px; height: 16px; }

.dt-pg-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

.dt-pg-dots {
    width: 28px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: var(--font-size-base);
    color: var(--color-text-placeholder);
    letter-spacing: 1.5px;
}

/* ─── Responsive ─── */
@media (max-width: 640px) {
    .dt-header { padding: 14px 14px 12px; }
    .dt-header-row {
        flex-direction: column;
        align-items: stretch;
    }
    .dt-header-controls {
        flex-direction: column;
        align-items: stretch;
    }
    .dt-search-input { width: 100%; }
    .dt-add-btn { justify-content: center; }
    .dt-body { padding: 0 10px 10px; }
    .dt-th, .dt-td {
        padding-left: 12px;
        padding-right: 12px;
    }
    .dt-footer {
        flex-direction: column;
        padding: 12px 14px;
        gap: 8px;
    }
}
</style>
