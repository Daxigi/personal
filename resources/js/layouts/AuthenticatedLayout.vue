<script setup lang="ts">
import { Link, router, usePage } from '@inertiajs/vue3'
import { computed, ref, watch, onMounted, onUnmounted } from 'vue'

interface NavChild {
    name: string
    href: string
}

interface NavItem {
    name: string
    href?: string
    children?: NavChild[]
}

const page = usePage()
const currentUrl = computed(() => page.url)

const navItems: NavItem[] = [
    { name: 'Inicio', href: '/dashboard' },
    {
        name: 'Personal',
        children: [
            { name: 'Legajos - Altas y Modificaciones', href: '/personal/legajos' },
            { name: 'Contratos - Egresos y Renovación Masivos', href: '/personal/contratos' },
            { name: 'Listados', href: '/personal/listados' },
        ],
    },
    {
        name: 'Consultas',
        children: [
            { name: 'Autoridades', href: '/consultas/autoridades' },
            { name: 'Nómina Personal', href: '/consultas/nomina-personal' },
            { name: 'Agentes por Secretarías- Datos completos personal y remuneraciones', href: '/consultas/agentes-secretarias' },
            { name: 'Agentes de todas las Secre. rama completa', href: '/consultas/agentes-rama-completa' },
            { name: 'Agentes por Dependencia Municipal', href: '/consultas/agentes-dependencia' },
            { name: 'Antigüedad Municipal', href: '/consultas/antiguedad' },
            { name: 'Datos Concurso Municipal', href: '/consultas/concurso' },
            { name: 'Contratos con Continuidad', href: '/consultas/contratos-continuidad' },
            { name: 'Diferencias y Subrogancia', href: '/consultas/diferencias-subrogancia' },
            { name: 'Sanciones y Apercibimientos', href: '/consultas/sanciones' },
            { name: 'Relaciones del Agente', href: '/consultas/relaciones-agente' },
            { name: 'Busca Titular de la Relación', href: '/consultas/busca-titular' },
            { name: '1 Relación en 2 Agentes', href: '/consultas/relacion-2-agentes' },
            { name: 'ART', href: '/consultas/art' },
            { name: 'Listado por Funciones', href: '/consultas/funciones' },
            { name: 'Educación', href: '/consultas/educacion' },
            { name: 'Agentes con Domic-Mail-Tel', href: '/consultas/domicilio-mail-tel' },
            { name: 'Jubilar', href: '/consultas/jubilar' },
        ],
    },
    {
        name: 'Novedades Varias',
        children: [
            { name: 'Novedades por Fechas - Auditoría', href: '/novedades-varias/auditoria' },
            { name: 'Agentes por Tipo Novedad', href: '/novedades-varias/tipo-novedad' },
            { name: 'Novedades Temporales - entre Fechas', href: '/novedades-varias/temporales' },
            { name: 'Últimas Novedades por Secretaría', href: '/novedades-varias/ultimas-secretaria' },
            { name: 'Días Trabajados por Secretarías', href: '/novedades-varias/dias-secretarias' },
            { name: 'Días Trabajados por DNI', href: '/novedades-varias/dias-dni' },
            { name: 'Altas y Bajas por Secretaría', href: '/novedades-varias/altas-bajas' },
            { name: 'Inasistencias por Año', href: '/novedades-varias/inasistencias' },
            { name: 'Datos Fec. Ingresos por Secretarías', href: '/novedades-varias/ingresos-secretarias' },
        ],
    },
    {
        name: 'Escala',
        children: [
            { name: 'Escala y Adicionales', href: '/escala/escala-adicionales' },
            { name: 'Parámetros', href: '/escala/parametros' },
        ],
    },
    {
        name: 'Parámetros',
        children: [
            { name: 'Ámbitos', href: '/parametros/ambitos' },
            { name: 'Jurisdicciones', href: '/parametros/jurisdicciones' },
            { name: 'Organismos Emisores de Títulos', href: '/parametros/organismos-emisores' },
            { name: 'Tipos de Título de Estudios', href: '/parametros/tipos-titulo' },
            { name: 'Carreras - Títulos', href: '/parametros/carreras-titulos' },
            { name: 'Tipos de Relación', href: '/parametros/tipos-relacion' },
            { name: 'Tipos de Seguros', href: '/parametros/tipos-seguros' },
            { name: 'Actualiza Per_neike', href: '/parametros/per-neike' },
            { name: 'Funciones', href: '/parametros/funciones' },
            { name: 'Tipos de Novedad', href: '/parametros/tipos-novedad' },
            { name: 'Tipos de Licencia', href: '/parametros/tipos-licencia' },
            { name: 'Empresas', href: '/parametros/empresas' },
            { name: 'Causa de Egreso', href: '/parametros/causa-egreso' },
            { name: 'Sanciones', href: '/parametros/sanciones' },
            { name: 'Situación de Revista', href: '/parametros/situacion-revista' },
        ],
    },
    {
        name: 'Digitalización',
        children: [
            { name: 'Digitalización', href: '/digitalizacion/digitalizacion' },
            { name: 'Seguros', href: '/digitalizacion/seguros' },
            { name: 'Estadísticas', href: '/digitalizacion/estadisticas' },
            { name: 'Parámetros', href: '/digitalizacion/parametros' },
        ],
    },
    {
        name: 'Documentaciones',
        children: [
            { name: 'Trabajar con Documentaciones', href: '/documentaciones/trabajar' },
            { name: 'Temas Documentaciones', href: '/documentaciones/temas' },
            { name: 'Subtemas Documentaciones', href: '/documentaciones/subtemas' },
            { name: 'Listados', href: '/documentaciones/listados' },
        ],
    },
]

function isActive(href: string): boolean {
    return currentUrl.value === href
}

function isSectionActive(item: NavItem): boolean {
    if (item.href) return currentUrl.value === item.href
    return item.children?.some((child) => currentUrl.value === child.href) ?? false
}

function handleLogout() {
    router.visit('/')
}

/* ─── Desktop dropdown (click-to-toggle) ─── */
const activeDropdown = ref<string | null>(null)

function toggleDropdown(name: string, event: MouseEvent) {
    event.stopPropagation()
    if (activeDropdown.value === name) {
        activeDropdown.value = null
    } else {
        activeDropdown.value = name
        positionDropdown(event.currentTarget as HTMLElement)
    }
}

const dropdownStyle = ref<Record<string, string>>({})

function positionDropdown(button: HTMLElement) {
    const rect = button.getBoundingClientRect()
    dropdownStyle.value = {
        position: 'fixed',
        top: `${rect.bottom + 4}px`,
        left: `${rect.left}px`,
    }
}

function closeDropdown() {
    activeDropdown.value = null
}

function onDocumentClick() {
    activeDropdown.value = null
}

onMounted(() => {
    document.addEventListener('click', onDocumentClick)
    document.addEventListener('keydown', onKeydown)
})
onUnmounted(() => {
    document.removeEventListener('click', onDocumentClick)
    document.removeEventListener('keydown', onKeydown)
    document.body.style.overflow = ''
})

/* ─── Mobile drawer ─── */
const mobileOpen = ref(false)
const expandedSections = ref<Set<string>>(new Set())

function toggleSection(name: string) {
    if (expandedSections.value.has(name)) {
        expandedSections.value.delete(name)
    } else {
        expandedSections.value.add(name)
    }
}

function isSectionExpanded(name: string): boolean {
    return expandedSections.value.has(name)
}

// Cerrar drawer y dropdown al navegar
watch(currentUrl, () => {
    mobileOpen.value = false
    activeDropdown.value = null
})

// Prevenir scroll del body cuando el drawer está abierto
watch(mobileOpen, (open) => {
    document.body.style.overflow = open ? 'hidden' : ''
})

// Cerrar con Escape
function onKeydown(e: KeyboardEvent) {
    if (e.key === 'Escape') {
        mobileOpen.value = false
        activeDropdown.value = null
    }
}

// Auto-expandir la sección activa al abrir
watch(mobileOpen, (open) => {
    if (open) {
        navItems.forEach(item => {
            if (item.children && isSectionActive(item)) {
                expandedSections.value.add(item.name)
            }
        })
    }
})
</script>

<template>
    <div class="layout-root">
        <nav class="layout-nav">
            <div class="layout-nav-inner">
                <!-- Logo -->
                <div class="layout-logo">
                    <span class="layout-logo-text">SisPer</span>
                </div>

                <!-- Desktop nav (horizontal, scroll) -->
                <div class="layout-desktop-nav">
                    <template v-for="item in navItems" :key="item.name">
                        <Link
                            v-if="item.href"
                            :href="item.href"
                            class="layout-nav-link"
                            :class="{ 'layout-nav-link--active': isActive(item.href) }"
                        >
                            {{ item.name }}
                        </Link>

                        <div v-else class="layout-dropdown">
                            <button
                                class="layout-nav-link"
                                :class="{
                                    'layout-nav-link--active': isSectionActive(item),
                                    'layout-nav-link--open': activeDropdown === item.name,
                                }"
                                @click="toggleDropdown(item.name, $event)"
                            >
                                {{ item.name }}
                                <svg
                                    class="layout-chevron"
                                    :class="{ 'layout-chevron--open': activeDropdown === item.name }"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </div>
                    </template>
                </div>

                <!-- Desktop user -->
                <div class="layout-user-desktop">
                    <span class="layout-user-name">Admin</span>
                    <button @click="handleLogout" class="layout-logout-btn">
                        Cerrar Sesión
                    </button>
                </div>

                <!-- Mobile hamburger button -->
                <button
                    class="layout-hamburger"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    aria-label="Menú de navegación"
                >
                    <!-- Ícono hamburguesa / X animado -->
                    <span class="layout-hamburger-bar" :class="{ 'layout-hamburger-bar--open': mobileOpen }" />
                    <span class="layout-hamburger-bar" :class="{ 'layout-hamburger-bar--open': mobileOpen }" />
                    <span class="layout-hamburger-bar" :class="{ 'layout-hamburger-bar--open': mobileOpen }" />
                </button>
            </div>
        </nav>

        <!-- Desktop dropdown panel (teleported to escape overflow clipping) -->
        <Teleport to="body">
            <Transition name="dropdown">
                <div
                    v-if="activeDropdown"
                    class="layout-dropdown-panel"
                    :style="dropdownStyle"
                    @click.stop
                >
                    <div class="layout-dropdown-content">
                        <Link
                            v-for="child in navItems.find(i => i.name === activeDropdown)?.children ?? []"
                            :key="child.href"
                            :href="child.href"
                            class="layout-dropdown-item"
                            :class="{ 'layout-dropdown-item--active': isActive(child.href) }"
                            @click="closeDropdown"
                        >
                            {{ child.name }}
                        </Link>
                    </div>
                </div>
            </Transition>
        </Teleport>

        <!-- Mobile drawer overlay -->
        <Transition name="fade">
            <div
                v-if="mobileOpen"
                class="layout-overlay"
                @click="mobileOpen = false"
            />
        </Transition>

        <!-- Mobile drawer -->
        <Transition name="slide">
            <div v-if="mobileOpen" class="layout-drawer">
                <div class="layout-drawer-header">
                    <span class="layout-logo-text">SisPer</span>
                    <button class="layout-drawer-close" @click="mobileOpen = false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                        </svg>
                    </button>
                </div>

                <nav class="layout-drawer-nav">
                    <template v-for="item in navItems" :key="item.name">
                        <!-- Link directo -->
                        <Link
                            v-if="item.href"
                            :href="item.href"
                            class="layout-drawer-link"
                            :class="{ 'layout-drawer-link--active': isActive(item.href) }"
                        >
                            {{ item.name }}
                        </Link>

                        <!-- Sección con hijos (acordeón) -->
                        <div v-else class="layout-drawer-section">
                            <button
                                class="layout-drawer-section-btn"
                                :class="{ 'layout-drawer-section-btn--active': isSectionActive(item) }"
                                @click="toggleSection(item.name)"
                            >
                                <span>{{ item.name }}</span>
                                <svg
                                    class="layout-drawer-arrow"
                                    :class="{ 'layout-drawer-arrow--open': isSectionExpanded(item.name) }"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <Transition name="accordion">
                                <div v-if="isSectionExpanded(item.name)" class="layout-drawer-children">
                                    <Link
                                        v-for="child in item.children"
                                        :key="child.href"
                                        :href="child.href"
                                        class="layout-drawer-child"
                                        :class="{ 'layout-drawer-child--active': isActive(child.href) }"
                                    >
                                        {{ child.name }}
                                    </Link>
                                </div>
                            </Transition>
                        </div>
                    </template>
                </nav>

                <div class="layout-drawer-footer">
                    <span class="layout-drawer-user">Admin</span>
                    <button @click="handleLogout" class="layout-drawer-logout">
                        Cerrar Sesión
                    </button>
                </div>
            </div>
        </Transition>

        <main class="layout-main">
            <slot />
        </main>
    </div>
</template>

<style scoped>
/* ═══════════════════════════════════════════
   Layout — Navegación Desktop + Mobile Drawer
   ═══════════════════════════════════════════ */

.layout-root {
    min-height: 100vh;
    background: var(--color-app-bg);
}

/* ─── Navbar ─── */
.layout-nav {
    background: var(--color-surface);
    border-bottom: 1px solid var(--color-border);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
    position: sticky;
    top: 0;
    z-index: 40;
}

.layout-nav-inner {
    display: flex;
    align-items: center;
    height: 52px;
    padding: 0 16px;
    gap: 8px;
}

/* ─── Logo ─── */
.layout-logo {
    flex-shrink: 0;
}

.layout-logo-text {
    font-size: var(--font-size-xl);
    font-weight: var(--font-weight-bold);
    color: var(--color-text-heading);
    letter-spacing: var(--tracking-tight);
}

/* ─── Desktop nav ─── */
.layout-desktop-nav {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2px;
    overflow-x: auto;
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
}

.layout-desktop-nav::-webkit-scrollbar {
    height: 3px;
}
.layout-desktop-nav::-webkit-scrollbar-thumb {
    background: var(--color-border);
    border-radius: 3px;
}

.layout-nav-link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 6px 12px;
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-secondary);
    border-radius: var(--radius-md);
    white-space: nowrap;
    cursor: pointer;
    transition: color 0.15s, background 0.15s;
    background: none;
    border: none;
    text-decoration: none;
}

.layout-nav-link:hover {
    color: var(--color-text-heading);
    background: var(--color-surface-subtle);
}

.layout-nav-link--active {
    color: var(--color-primary);
    background: var(--color-primary-light);
}

.layout-chevron {
    width: 14px;
    height: 14px;
    transition: transform 0.2s;
}

/* ─── Desktop dropdown ─── */
.layout-dropdown {
    position: relative;
}

.layout-chevron--open {
    transform: rotate(180deg);
}

.layout-nav-link--open {
    color: var(--color-text-heading);
    background: var(--color-surface-subtle);
}


/* ─── Desktop user ─── */
.layout-user-desktop {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}

.layout-user-name {
    font-size: var(--font-size-sm);
    color: var(--color-text-secondary);
    font-weight: var(--font-weight-normal);
}

.layout-logout-btn {
    font-size: var(--font-size-sm);
    color: var(--color-text-muted);
    background: none;
    border: none;
    cursor: pointer;
    transition: color 0.15s;
}
.layout-logout-btn:hover {
    color: var(--color-error);
}

/* ─── Hamburger button (solo mobile) ─── */
.layout-hamburger {
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    width: 36px;
    height: 36px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 6px;
    border-radius: var(--radius-md);
    transition: background 0.15s;
    flex-shrink: 0;
}
.layout-hamburger:hover {
    background: var(--color-surface-subtle);
}

.layout-hamburger-bar {
    display: block;
    width: 20px;
    height: 2px;
    background: var(--color-text-body);
    border-radius: 1px;
    transition: transform 0.25s ease, opacity 0.2s ease;
}

.layout-hamburger-bar--open:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}
.layout-hamburger-bar--open:nth-child(2) {
    opacity: 0;
}
.layout-hamburger-bar--open:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}

/* ─── Mobile overlay ─── */
.layout-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.4);
    z-index: 45;
}

/* ─── Mobile drawer ─── */
.layout-drawer {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 300px;
    max-width: 85vw;
    background: var(--color-surface);
    z-index: 50;
    display: flex;
    flex-direction: column;
    box-shadow: 4px 0 24px rgba(0, 0, 0, 0.15);
    overflow: hidden;
}

.layout-drawer-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 16px;
    border-bottom: 1px solid var(--color-border);
    flex-shrink: 0;
}

.layout-drawer-close {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: none;
    border: none;
    border-radius: var(--radius-md);
    cursor: pointer;
    color: var(--color-text-muted);
    transition: background 0.15s, color 0.15s;
}
.layout-drawer-close svg {
    width: 20px;
    height: 20px;
}
.layout-drawer-close:hover {
    background: var(--color-surface-subtle);
    color: var(--color-text-body);
}

/* ─── Drawer nav ─── */
.layout-drawer-nav {
    flex: 1;
    overflow-y: auto;
    padding: 8px 0;
}

.layout-drawer-link {
    display: block;
    padding: 10px 20px;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-body);
    text-decoration: none;
    transition: background 0.1s;
}
.layout-drawer-link:hover {
    background: var(--color-surface-subtle);
}
.layout-drawer-link--active {
    color: var(--color-primary);
    background: var(--color-primary-light);
}

/* ─── Drawer accordion sections ─── */
.layout-drawer-section {
    border-bottom: 1px solid var(--color-border-lighter);
}

.layout-drawer-section-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 10px 20px;
    font-size: var(--font-size-base);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-body);
    background: none;
    border: none;
    cursor: pointer;
    text-align: left;
    transition: background 0.1s;
}
.layout-drawer-section-btn:hover {
    background: var(--color-surface-subtle);
}
.layout-drawer-section-btn--active {
    color: var(--color-primary);
}

.layout-drawer-arrow {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    color: var(--color-text-muted);
    transition: transform 0.2s ease;
}
.layout-drawer-arrow--open {
    transform: rotate(180deg);
}

.layout-drawer-children {
    background: var(--color-surface-muted);
    border-top: 1px solid var(--color-border-lighter);
    overflow: hidden;
}

.layout-drawer-child {
    display: block;
    padding: 9px 20px 9px 32px;
    font-size: var(--font-size-sm);
    color: var(--color-text-secondary);
    text-decoration: none;
    transition: background 0.1s, color 0.1s;
    border-bottom: 1px solid var(--color-border-lighter);
}
.layout-drawer-child:last-child {
    border-bottom: none;
}
.layout-drawer-child:hover {
    background: var(--color-surface-subtle);
    color: var(--color-text-heading);
}
.layout-drawer-child--active {
    color: var(--color-primary);
    background: var(--color-primary-light);
    font-weight: var(--font-weight-semibold);
}

/* ─── Drawer footer ─── */
.layout-drawer-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 20px;
    border-top: 1px solid var(--color-border);
    flex-shrink: 0;
    background: var(--color-surface-muted);
}

.layout-drawer-user {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-body);
}

.layout-drawer-logout {
    font-size: var(--font-size-sm);
    color: var(--color-text-muted);
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px 8px;
    border-radius: var(--radius-md);
    transition: color 0.15s, background 0.15s;
}
.layout-drawer-logout:hover {
    color: var(--color-error);
    background: #fef2f2;
}

/* ─── Main content ─── */
.layout-main {
    padding: 24px 16px;
    overflow-x: hidden;
}

/* ─── Transitions ─── */
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.slide-enter-active {
    transition: transform 0.25s ease-out;
}
.slide-leave-active {
    transition: transform 0.2s ease-in;
}
.slide-enter-from,
.slide-leave-to {
    transform: translateX(-100%);
}

.accordion-enter-active {
    transition: max-height 0.25s ease-out, opacity 0.2s ease-out;
    max-height: 800px;
}
.accordion-leave-active {
    transition: max-height 0.2s ease-in, opacity 0.15s ease-in;
}
.accordion-enter-from,
.accordion-leave-to {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
}

/* ═══════════════════════════════════════════
   Responsive: mobile ≤ 768px
   ═══════════════════════════════════════════ */
@media (max-width: 768px) {
    .layout-desktop-nav {
        display: none;
    }
    .layout-user-desktop {
        display: none;
    }
    .layout-hamburger {
        display: flex;
        margin-left: auto;
    }
    .layout-main {
        padding: 16px 12px;
    }
}
</style>

<!-- Estilos no-scoped para el dropdown teleportado a body -->
<style>
.layout-dropdown-panel {
    z-index: 50;
}

.layout-dropdown-content {
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    padding: 4px 0;
    min-width: 260px;
    max-height: 400px;
    overflow-y: auto;
}

.layout-dropdown-item {
    display: block;
    padding: 8px 16px;
    font-size: var(--font-size-sm);
    color: var(--color-text-body);
    text-decoration: none;
    transition: background 0.1s, color 0.1s;
}

.layout-dropdown-item:hover {
    background: var(--color-surface-subtle);
    color: var(--color-text-heading);
}

.layout-dropdown-item--active {
    color: var(--color-primary);
    background: var(--color-primary-light);
    font-weight: var(--font-weight-semibold);
}

/* Dropdown transition */
.dropdown-enter-active {
    transition: opacity 0.15s ease, transform 0.15s ease;
}
.dropdown-leave-active {
    transition: opacity 0.1s ease, transform 0.1s ease;
}
.dropdown-enter-from,
.dropdown-leave-to {
    opacity: 0;
    transform: translateY(-4px);
}
</style>