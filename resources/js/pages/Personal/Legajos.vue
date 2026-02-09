<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import { computed, ref } from 'vue'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import DataTable from '@/components/DataTable.vue'
import type { Column } from '@/components/DataTable.vue'
import SearchFilter from '@/components/SearchFilter.vue'

const filtro = ref('')
const sortKey = ref('')
const sortAsc = ref(true)

const columns: Column[] = [
    { key: 'legajo', label: 'Legajo', sortable: true },
    { key: 'cuil', label: 'CUIL' },
    { key: 'apellidoNombre', label: 'Apellido y Nombres', sortable: true },
    { key: 'fechaNacimiento', label: 'Fecha de Nacimiento' },
    { key: 'genero', label: 'Género' },
]

const legajos = [
    { legajo: 1001, cuil: '20-12345678-9', apellidoNombre: 'García, Juan Carlos', fechaNacimiento: '15/03/1980', genero: 'M' },
    { legajo: 1002, cuil: '27-23456789-0', apellidoNombre: 'López, María Elena', fechaNacimiento: '22/07/1985', genero: 'F' },
    { legajo: 1003, cuil: '20-34567890-1', apellidoNombre: 'Martínez, Pedro Alberto', fechaNacimiento: '10/11/1975', genero: 'M' },
    { legajo: 1004, cuil: '27-45678901-2', apellidoNombre: 'Rodríguez, Ana Laura', fechaNacimiento: '05/09/1990', genero: 'F' },
    { legajo: 1005, cuil: '20-56789012-3', apellidoNombre: 'Fernández, Diego Martín', fechaNacimiento: '18/01/1988', genero: 'M' },
    { legajo: 1006, cuil: '27-67890123-4', apellidoNombre: 'González, Lucía Beatriz', fechaNacimiento: '30/06/1982', genero: 'F' },
    { legajo: 1007, cuil: '20-78901234-5', apellidoNombre: 'Pérez, Roberto Carlos', fechaNacimiento: '12/12/1970', genero: 'M' },
    { legajo: 1008, cuil: '27-89012345-6', apellidoNombre: 'Sánchez, Carolina Inés', fechaNacimiento: '25/04/1993', genero: 'F' },
]

const filteredData = computed(() => {
    let result = [...legajos]

    if (filtro.value) {
        const term = filtro.value.toLowerCase()
        result = result.filter((row) =>
            row.apellidoNombre.toLowerCase().includes(term)
            || row.cuil.includes(term)
            || String(row.legajo).includes(term)
        )
    }

    if (sortKey.value) {
        result.sort((a, b) => {
            const valA = a[sortKey.value as keyof typeof a]
            const valB = b[sortKey.value as keyof typeof b]
            if (valA < valB) return sortAsc.value ? -1 : 1
            if (valA > valB) return sortAsc.value ? 1 : -1
            return 0
        })
    }

    return result
})

function handleSort(column: string) {
    if (sortKey.value === column) {
        sortAsc.value = !sortAsc.value
    } else {
        sortKey.value = column
        sortAsc.value = true
    }
}
</script>

<template>
    <Head title="Legajos - Altas y Modificaciones" />

    <AuthenticatedLayout>
        <DataTable :columns="columns" :data="filteredData" row-key="legajo" @sort="handleSort">
            <template #header>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <h1 class="text-lg font-bold text-gray-800">Legajos</h1>
                        <SearchFilter v-model="filtro" placeholder="Filtrar legajos..." class="w-64" />
                    </div>
                    <button
                        class="bg-blue-600 text-white px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                    >
                        + Agregar
                    </button>
                </div>
            </template>

            <template #actions>
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">
                    Ver
                </button>
            </template>
        </DataTable>
    </AuthenticatedLayout>
</template>
