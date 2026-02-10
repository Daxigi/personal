<script setup lang="ts">
import { computed, ref, watch, nextTick, onMounted } from 'vue'

export interface Tab {
    key: string
    label: string
    icon?: string
    badge?: string | number
    disabled?: boolean
}

const props = withDefaults(defineProps<{
    tabs: Tab[]
    title?: string
    /** Muestra borde interior y padding en el contenido */
    padded?: boolean
    /** Acciones en el footer (Grabar, Cancelar, etc.) */
    showFooter?: boolean
}>(), {
    padded: true,
    showFooter: false,
})

const activeTab = defineModel<string>()

const currentTab = computed(() => activeTab.value || props.tabs[0]?.key)

// ─── Scroll para tabs overflow ───
const tabsNav = ref<HTMLElement | null>(null)
const canScrollLeft = ref(false)
const canScrollRight = ref(false)

function checkScroll() {
    const el = tabsNav.value
    if (!el) return
    canScrollLeft.value = el.scrollLeft > 2
    canScrollRight.value = el.scrollLeft < el.scrollWidth - el.clientWidth - 2
}

function scrollTabs(dir: 'left' | 'right') {
    const el = tabsNav.value
    if (!el) return
    el.scrollBy({ left: dir === 'left' ? -200 : 200, behavior: 'smooth' })
}

onMounted(() => {
    checkScroll()
    tabsNav.value?.addEventListener('scroll', checkScroll, { passive: true })
    window.addEventListener('resize', checkScroll, { passive: true })
})

// Asegurar que al cambiar de tab, el tab activo sea visible
watch(currentTab, async () => {
    await nextTick()
    const el = tabsNav.value
    if (!el) return
    const activeBtn = el.querySelector('[data-active="true"]') as HTMLElement | null
    if (activeBtn) {
        activeBtn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' })
    }
})

function selectTab(tab: Tab) {
    if (tab.disabled) return
    activeTab.value = tab.key
}
</script>

<template>
    <div class="tp-card">
        <!-- ─── Header con título (opcional) ─── -->
        <div v-if="title || $slots['header-actions']" class="tp-header">
            <h3 v-if="title" class="tp-title">{{ title }}</h3>
            <div v-if="$slots['header-actions']" class="tp-header-actions">
                <slot name="header-actions" />
            </div>
        </div>

        <!-- ─── Tab navigation ─── -->
        <div class="tp-tabs-wrapper">
            <!-- Scroll left arrow -->
            <button
                v-if="canScrollLeft"
                class="tp-scroll-btn tp-scroll-btn--left"
                @click="scrollTabs('left')"
                aria-label="Scroll tabs izquierda"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
            </button>

            <nav ref="tabsNav" class="tp-tabs-nav">
                <button
                    v-for="tab in tabs"
                    :key="tab.key"
                    :data-active="currentTab === tab.key"
                    class="tp-tab"
                    :class="{
                        'tp-tab--active': currentTab === tab.key,
                        'tp-tab--disabled': tab.disabled,
                    }"
                    :disabled="tab.disabled"
                    @click="selectTab(tab)"
                >
                    <span class="tp-tab-label">{{ tab.label }}</span>
                    <span v-if="tab.badge != null" class="tp-tab-badge">
                        {{ tab.badge }}
                    </span>
                </button>
            </nav>

            <!-- Scroll right arrow -->
            <button
                v-if="canScrollRight"
                class="tp-scroll-btn tp-scroll-btn--right"
                @click="scrollTabs('right')"
                aria-label="Scroll tabs derecha"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- ─── Tab content ─── -->
        <div class="tp-body" :class="{ 'tp-body--padded': padded }">
            <template v-for="tab in tabs" :key="tab.key">
                <div v-show="currentTab === tab.key" class="tp-panel">
                    <slot :name="tab.key" />
                </div>
            </template>
        </div>

        <!-- ─── Footer con acciones (opcional) ─── -->
        <div v-if="showFooter || $slots.footer" class="tp-footer">
            <slot name="footer" />
        </div>
    </div>
</template>

<style scoped>
/* ═══════════════════════════════════════════
   TabbedPanel — Componente reutilizable
   Sistema Municipal
   ═══════════════════════════════════════════ */

/* ─── Card ─── */
.tp-card {
    background: #ffffff;
    border: 1px solid #dfe3ea;
    border-radius: 10px;
    overflow: hidden;
    box-shadow:
        0 1px 3px rgba(0, 0, 0, 0.04),
        0 4px 16px rgba(0, 0, 0, 0.025);
}

/* ─── Header (opcional, para título + acciones) ─── */
.tp-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 24px 0;
    gap: 16px;
}

.tp-title {
    font-size: 17px;
    font-weight: 700;
    color: #111827;
    margin: 0;
    letter-spacing: -0.015em;
}

.tp-header-actions {
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ─── Tabs wrapper (contiene scroll + nav) ─── */
.tp-tabs-wrapper {
    position: relative;
    border-bottom: 1px solid #e5e7eb;
}

/* ─── Scroll buttons ─── */
.tp-scroll-btn {
    position: absolute;
    top: 0;
    bottom: 1px;
    width: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, #fff 60%, transparent);
    border: none;
    cursor: pointer;
    z-index: 2;
    color: #6b7280;
    padding: 0;
    transition: color 0.15s;
}
.tp-scroll-btn:hover { color: #1f2937; }
.tp-scroll-btn--left { left: 0; padding-left: 4px; }
.tp-scroll-btn--right {
    right: 0;
    padding-right: 4px;
    background: linear-gradient(to left, #fff 60%, transparent);
}
.tp-scroll-btn svg { width: 16px; height: 16px; }

/* ─── Tabs nav (scrollable) ─── */
.tp-tabs-nav {
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 0 24px;
    gap: 0;
}
.tp-tabs-nav::-webkit-scrollbar { display: none; }

/* ─── Individual tab ─── */
.tp-tab {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 12px 16px;
    font-size: 13.5px;
    font-weight: 500;
    color: #6b7280;
    background: none;
    border: none;
    border-bottom: 2px solid transparent;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.15s ease;
    position: relative;
    margin-bottom: -1px;
}

.tp-tab:hover:not(.tp-tab--active):not(.tp-tab--disabled) {
    color: #374151;
    border-bottom-color: #d1d5db;
}

.tp-tab--active {
    color: #2563eb;
    border-bottom-color: #2563eb;
    font-weight: 600;
}

.tp-tab--disabled {
    color: #c4c9d4;
    cursor: not-allowed;
}

.tp-tab-label {
    line-height: 1;
}

/* ─── Badge ─── */
.tp-tab-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 18px;
    height: 18px;
    padding: 0 5px;
    font-size: 11px;
    font-weight: 600;
    line-height: 1;
    border-radius: 9px;
    background: #e5e7eb;
    color: #4b5563;
    font-variant-numeric: tabular-nums;
}

.tp-tab--active .tp-tab-badge {
    background: #dbeafe;
    color: #1d4ed8;
}

/* ─── Panel content ─── */
.tp-body {
    min-height: 120px;
}

.tp-body--padded {
    padding: 24px;
}

.tp-panel {
    /* Animación sutil al cambiar de tab */
    animation: tp-fade-in 0.15s ease;
}

@keyframes tp-fade-in {
    from { opacity: 0.6; }
    to { opacity: 1; }
}

/* ─── Footer ─── */
.tp-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    padding: 14px 24px;
    border-top: 1px solid #eef1f5;
    background: #fafbfd;
}

/* ─── Responsive ─── */
@media (max-width: 640px) {
    .tp-header { padding: 14px 16px 0; }
    .tp-tabs-nav { padding: 0 16px; }
    .tp-tab { padding: 10px 12px; font-size: 13px; }
    .tp-body--padded { padding: 16px; }
    .tp-footer { padding: 12px 16px; }
}
</style>