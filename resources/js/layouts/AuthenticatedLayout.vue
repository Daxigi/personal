<script setup lang="ts">
import { Link, router, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

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
</script>

<template>
    <div class="min-h-screen bg-app-bg">
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="mx-auto px-4">
                <div class="flex items-center h-16">
                    <!-- Logo (izquierda) -->
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-lg font-bold text-gray-800">SisPer</span>
                    </div>

                    <!-- Nav items (centrados) -->
                    <div class="flex-1 flex justify-center items-center divide-x divide-gray-200/40">
                        <template v-for="item in navItems" :key="item.name">
                            <Link
                                v-if="item.href"
                                :href="item.href"
                                class="inline-flex items-center mx-1 px-3 py-2 text-sm font-medium rounded-md transition-colors whitespace-nowrap"
                                :class="isActive(item.href)
                                    ? 'text-blue-600 bg-blue-50'
                                    : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'"
                            >
                                {{ item.name }}
                            </Link>

                            <div v-else class="relative group px-1">
                                <button
                                    class="inline-flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-md transition-colors whitespace-nowrap"
                                    :class="isSectionActive(item)
                                        ? 'text-blue-600 bg-blue-50'
                                        : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'"
                                >
                                    {{ item.name }}
                                    <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div class="absolute left-0 top-full pt-1 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-150 z-50">
                                    <div class="bg-white rounded-md shadow-lg border border-gray-200 py-1 min-w-64 max-h-96 overflow-y-auto">
                                        <Link
                                            v-for="child in item.children"
                                            :key="child.href"
                                            :href="child.href"
                                            class="block px-4 py-2 text-sm transition-colors"
                                            :class="isActive(child.href)
                                                ? 'text-blue-600 bg-blue-50'
                                                : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900'"
                                        >
                                            {{ child.name }}
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- User (derecha) -->
                    <div class="flex-shrink-0 flex items-center space-x-4">
                        <span class="text-sm text-gray-600">Admin</span>
                        <button
                            @click="handleLogout"
                            class="text-sm text-gray-500 hover:text-gray-700 transition-colors"
                        >
                            Cerrar Sesión
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <main class="mx-auto py-6 px-4">
            <slot />
        </main>
    </div>
</template>
