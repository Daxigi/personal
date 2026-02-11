<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3'
import { ref, reactive, computed } from 'vue'
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
    // fechaAlta: string | null
    sexo: string
    [key: string]: unknown
}

interface LegajoEditando {
    legajo: number
    tipodoc: number | null
    documento: number
    apellido: string
    nombres: string
    sexo: string
    estadoCivil: string
    fechaNacimiento: string | null
    localidadNac: string
    provinciaNac: number | null
    paisNac: string
    nacionalizado: string | null
    domicilio: string
    localidadDom: string
    provinciaDom: number | null
    email: string
    telefono: string
    comentarios: string
    cuit1: number | null
    cuit2: number | null
    localizacion: string | null
}

interface SelectOption {
    value: string | number
    label: string
}

const props = defineProps<{
    legajos: Legajo[]
    tiposDocumento: SelectOption[]
    provincias: SelectOption[]
    legajoEditando?: LegajoEditando
}>()

const isCreating = ref(false)

const isEditing = computed(() => !!props.legajoEditando)
const showForm = computed(() => isCreating.value || isEditing.value)

function emptyForm() {
    return {
        legajo: null as number | null,
        tipodoc: null as string | number | null,
        documento: null as number | null,
        cuit1: null as number | null,
        cuit2: null as number | null,
        apellido: '',
        nombres: '',
        sexo: null as string | null,
        estadoCivil: null as string | null,
        fechaNacimiento: null as string | null,
        localidadNac: '',
        provinciaNac: null as string | number | null,
        paisNac: '',
        nacionalizado: null as string | null,
        domicilio: '',
        localidadDom: '',
        provinciaDom: null as string | number | null,
        email: '',
        telefono: '',
        comentarios: '',
    }
}

function formFromLegajo(l: LegajoEditando) {
    return {
        legajo: l.legajo,
        tipodoc: l.tipodoc,
        documento: l.documento,
        cuit1: l.cuit1,
        cuit2: l.cuit2,
        apellido: l.apellido,
        nombres: l.nombres,
        sexo: l.sexo || null,
        estadoCivil: l.estadoCivil || null,
        fechaNacimiento: l.fechaNacimiento,
        localidadNac: l.localidadNac,
        provinciaNac: l.provinciaNac,
        paisNac: l.paisNac,
        nacionalizado: l.nacionalizado,
        domicilio: l.domicilio,
        localidadDom: l.localidadDom,
        provinciaDom: l.provinciaDom,
        email: l.email,
        telefono: l.telefono,
        comentarios: l.comentarios,
    }
}

const form = reactive(props.legajoEditando ? formFromLegajo(props.legajoEditando) : emptyForm())

const panelTitle = computed(() => {
    if (isEditing.value) return `Legajo #${props.legajoEditando!.legajo}`
    return 'Nuevo Legajo'
})

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
    { key: 'legajo', label: 'Legajo', sortable: true, width: '80px' },
    { key: 'cuil', label: 'CUIL', width: '160px' },
    { key: 'apellidoNombre', label: 'Apellido y Nombres', sortable: true }, // sin width → toma el espacio restante
    { key: 'fechaNacimiento', label: 'Fecha de Nacimiento', width: '155px' },
    { key: 'sexo', label: 'Sexo', width: '110px' },
]
    // { key: 'fechaAlta', label: 'Fecha de Alta', sortable: true },

function handleAgregar() {
    Object.assign(form, emptyForm())
    isCreating.value = true
}

function handleVolver() {
    if (isEditing.value) {
        router.visit('/personal/legajos')
    } else {
        isCreating.value = false
    }
}

function handleVerDetalle(row: Record<string, unknown>) {
    router.visit(`/personal/legajos/${row.legajo}`)
}

function handleSubmit() {
    console.log('Guardando legajo...', { ...form })
    if (!isEditing.value) {
        isCreating.value = false
    }
}
</script>

<template>
    <Head title="Legajos - Altas y Modificaciones" />

    <AuthenticatedLayout>
        <div class="max-w-5xl mx-auto my-6 px-4 sm:px-6">

            <div v-if="showForm">
                <div class="mb-4">
                    <button
                        @click="handleVolver"
                        class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center gap-1"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Volver al listado
                    </button>
                </div>

                <TabbedPanel :tabs="tabs" :title="panelTitle">
                    <template #datos_personales>
                        <FormPanel
                            title="Datos Básicos"
                            @submit="handleSubmit"
                            @cancel="handleVolver"
                        >
                            <div class="legajo-form">
                                <!-- Datos generales -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <FormField v-model="form.legajo" label="Legajo" type="text" readonly />
                                    <FormField :model-value="legajoEditando?.localizacion ?? ''" label="Localización del lugar de trabajo" type="text" readonly />
                                </div>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <FormField
                                        v-model="form.tipodoc"
                                        label="Documento Tipo"
                                        type="select"
                                        placeholder="Seleccionar"
                                        :options="tiposDocumento"
                                    />
                                    <FormField v-model="form.cuit1" label="Tipo" type="number" required />
                                    <FormField v-model="form.documento" label="DNI" type="number" required />
                                    <FormField v-model="form.cuit2" label="Dig. Verif." type="number" required />
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <FormField v-model="form.apellido" label="Apellido" type="text" required />
                                    <FormField v-model="form.nombres" label="Nombres" type="text" required />
                                    <FormField
                                        v-model="form.sexo"
                                        label="Genero"
                                        type="select"
                                        placeholder="Seleccionar"
                                        required
                                        :options="[
                                            { value: 'Femenino', label: 'Femenino' },
                                            { value: 'Masculino', label: 'Masculino' },
                                        ]"
                                    />
                                    <FormField
                                        v-model="form.estadoCivil"
                                        label="Estado Civil"
                                        type="select"
                                        placeholder="Seleccionar"
                                        :options="[
                                            { value: 'Soltero', label: 'Soltero' },
                                            { value: 'Casado', label: 'Casado' },
                                            { value: 'Separado', label: 'Separado' },
                                            { value: 'Divorciado', label: 'Divorciado' },
                                            { value: 'Viudo', label: 'Viudo' },
                                            { value: 'Concubino', label: 'Concubino' },
                                        ]"
                                    />
                                </div>

                                <!-- Datos de nacimiento -->
                                <hr class="legajo-divider" />
                                <h4 class="legajo-section-title">Datos de nacimiento</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <FormField v-model="form.fechaNacimiento" label="Fecha" type="date" required />
                                    <FormField v-model="form.localidadNac" label="Localidad" type="text" />
                                    <FormField
                                        v-model="form.provinciaNac"
                                        label="Provincia"
                                        type="select"
                                        placeholder="Seleccionar"
                                        :options="provincias"
                                    />
                                    <FormField v-model="form.paisNac" label="Pais" type="text" />
                                    <FormField v-model="form.nacionalizado" label="Nacionalizado" type="date" />
                                </div>

                                <!-- Domicilio y contacto -->
                                <hr class="legajo-divider" />
                                <h4 class="legajo-section-title">Domicilio y contacto</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <FormField v-model="form.domicilio" label="Domicilio" type="textarea" class="md:col-span-2" />
                                    <FormField v-model="form.localidadDom" label="Localidad" type="text" required />
                                    <FormField
                                        v-model="form.provinciaDom"
                                        label="Provincia"
                                        type="select"
                                        placeholder="Seleccionar"
                                        :options="provincias"
                                    />
                                    <FormField v-model="form.email" label="Correo Electrónico" type="text" />
                                    <FormField v-model="form.telefono" label="Telefono" type="text" />
                                    <FormField v-model="form.comentarios" label="Comentarios" type="textarea" class="md:col-span-2" />
                                </div>
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

                <template #actions="{ row }">
                    <div class="flex items-center justify-end">
                        <button
                            @click="handleVerDetalle(row)"
                            class="legajo-action-btn"
                            title="Ver detalle"
                        >
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

<style scoped>
.legajo-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.legajo-divider {
    border: none;
    border-top: 1px solid var(--color-border-input);
    margin: 4px 0 0;
}

.legajo-action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 6px 12px;
    color: var(--color-primary);
    background: var(--color-primary-light);
    border: var(--border-width-control) solid var(--color-primary);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: var(--transition-base);
}

.legajo-action-btn:hover {
    color: var(--color-surface);
    background: var(--color-primary);
}

.legajo-section-title {
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-heading);
    margin: 0;
    background: var(--color-surface-section);
    padding: 8px 12px;
    border-radius: var(--radius-md);
}
</style>
