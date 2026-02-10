<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import DataTable from '@/components/patterns/DataTable.vue'
import type { Column } from '@/components/patterns/DataTable.vue'
import TabbedPanel from '@/components/patterns/TabbedPanel.vue'
import FormPanel from '@/components/patterns/FormPanel.vue'
import FormField from '@/components/patterns/FormField.vue'

interface Legajo {
    legajo: number
    documento: number
    cuit1: number | null
    cuit2: number | null
    apellidoNombre: string
    fechaNacimiento: string | null
    fechaAlta: string | null
    sexo: string
    [key: string]: unknown
}

const props = defineProps<{
    legajos: Legajo[]
}>()

const isCreating = ref(false)

const tabs = [
    { key: 'datos_personales', label: 'Datos Personales' },
    { key: 'antiguedades', label: 'Antiguedades' },
    { key: 'estudios', label: 'Estudios' },
    { key: 'antecedentes', label: 'Antecedentes Laborales' },
    { key: 'relaciones', label: 'Relaciones' },
    { key: 'certificados', label: 'Certificados' },
    { key: 'adicionales', label: 'Adicionales' },
    { key: 'novedades', label: 'Novedades' },
    { key: 'seguros', label: 'Seguros' },
    { key: 'sit_revista', label: 'Sit. Revista' },
    { key: 'asiste', label: 'Asiste' },
]

const columns: Column[] = [
    { key: 'legajo', label: 'Legajo', sortable: true },
    { key: 'cuil', label: 'CUIL' },
    { key: 'apellidoNombre', label: 'Apellido y Nombres', sortable: true },
    { key: 'fechaNacimiento', label: 'Fecha de Nacimiento' },
    { key: 'fechaAlta', label: 'Fecha de Alta', sortable: true },
    { key: 'sexo', label: 'Sexo' },
]

function handleAgregar() {
    isCreating.value = true
}

function handleCancelCreate() {
    isCreating.value = false
}

function handleSubmit() {
    console.log('Guardando legajo...')
    isCreating.value = false
}
</script>

<template>
    <Head title="Legajos - Altas y Modificaciones" />

    <AuthenticatedLayout>
        <div class="max-w-5xl mx-auto my-6 px-4 sm:px-6">

            <div v-if="isCreating">
                <div class="mb-4">
                    <button
                        @click="handleCancelCreate"
                        class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center gap-1"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Volver al listado
                    </button>
                </div>

                <TabbedPanel :tabs="tabs" title="Nuevo Legajo">
                    <template #datos_personales>
                        <FormPanel
                            title="Datos Básicos"
                            @submit="handleSubmit"
                            @cancel="handleCancelCreate"
                        >
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <FormField label="Apellido y Nombre" type="text" required />
                                <FormField label="Documento" type="number" />
                                <FormField label="CUIL (Prefijo)" type="number" />
                                <FormField label="CUIL (Sufijo)" type="number" />
                                <FormField label="Fecha Nacimiento" type="date" />
                                <FormField
                                    label="Sexo"
                                    type="select"
                                    placeholder="Seleccionar"
                                    :options="[
                                        { value: 'M', label: 'Masculino' },
                                        { value: 'F', label: 'Femenino' },
                                    ]"
                                />
                            </div>
                        </FormPanel>
                    </template>

                    <template #antiguedades>
                        <p class="text-gray-500 italic">Contenido de Antigüedades pendiente...</p>
                    </template>
                    <template #estudios>
                        <p class="text-gray-500 italic">Contenido de Estudios pendiente...</p>
                    </template>
                    <template #antecedentes>
                        <p class="text-gray-500 italic">Contenido de Antecedentes Laborales pendiente...</p>
                    </template>
                    <template #relaciones>
                        <p class="text-gray-500 italic">Contenido de Relaciones pendiente...</p>
                    </template>
                    <template #certificados>
                        <p class="text-gray-500 italic">Contenido de Certificados pendiente...</p>
                    </template>
                    <template #adicionales>
                        <p class="text-gray-500 italic">Contenido de Adicionales pendiente...</p>
                    </template>
                    <template #novedades>
                        <p class="text-gray-500 italic">Contenido de Novedades pendiente...</p>
                    </template>
                    <template #seguros>
                        <p class="text-gray-500 italic">Contenido de Seguros pendiente...</p>
                    </template>
                    <template #sit_revista>
                        <p class="text-gray-500 italic">Contenido de Sit. Revista pendiente...</p>
                    </template>
                    <template #asiste>
                        <p class="text-gray-500 italic">Contenido de Asiste pendiente...</p>
                    </template>
                </TabbedPanel>
            </div>

            <DataTable
                v-else
                title="Legajos"
                add-label="Agregar"
                :columns="columns"
                :data="legajos"
                row-key="legajo"
                :pagination="true"
                :items-per-page="50"
                search-placeholder="Filtrar legajos..."
                @add="handleAgregar"
            >
                <template #cell="{ column, row, value }">
                    <span v-if="column.key === 'cuil'">
                        {{ row.cuit1 }}-{{ row.documento }}-{{ row.cuit2 }}
                    </span>
                    <span v-else>
                        {{ value }}
                    </span>
                </template>

                <template #actions>
                    <div class="flex items-center justify-end">
                        <button class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors" title="Ver detalle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </template>
            </DataTable>
        </div>
    </AuthenticatedLayout>
</template>
