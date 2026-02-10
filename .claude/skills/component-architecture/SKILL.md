---
name: component-architecture
description: Arquitectura de componentes del Sistema Municipal. Consultar SIEMPRE antes de crear o modificar componentes, formularios, tablas, filtros, tabs, o páginas CRUD. Define las 3 capas (base, patterns, pages), la config declarativa por entidad, los composables, y los patrones de uso de cada componente.
---

# Arquitectura de Componentes — Sistema Municipal

## 1. Filosofía

Todo el sistema se reduce a 4 operaciones aplicadas a distintas entidades:

```
LISTAR  →  VER  →  CREAR / EDITAR  →  ELIMINAR
```

Cada entidad (Legajos, Novedades, Certificados, etc.) repite el mismo patrón.
La clave es **parametrizar, no copiar**.

---

## 2. Capas de Componentes

```
┌─────────────────────────────────────────────────────┐
│  CAPA 3 — Páginas (pages/)                          │
│  ~30-50 líneas. Solo importan configs + componentes │
├─────────────────────────────────────────────────────┤
│  CAPA 2 — Patrones (patterns/)                      │
│  Combinan primitivos en patrones CRUD reutilizables │
├─────────────────────────────────────────────────────┤
│  CAPA 1 — Primitivos (base/)                        │
│  Bloques atómicos, cero lógica de negocio           │
└─────────────────────────────────────────────────────┘
```

---

## 3. Inventario de Componentes

### CAPA 1 — base/

| Componente | Propósito | Props principales |
|---|---|---|
| AppInput | Text, number, email, tel, password | modelValue, label, type, placeholder, error, required, disabled, hint |
| AppSelect | Select nativo | modelValue, label, options, placeholder, error |
| AppTextarea | Textarea autosize | modelValue, label, rows, error |
| AppCheckbox | Checkbox / toggle | modelValue, label |
| AppRadioGroup | Grupo de radios | modelValue, label, options |
| AppDatePicker | Input date formato AR | modelValue, label, error |
| AppButton | Botón con variantes | variant (primary/secondary/danger/ghost), size (sm/md/lg), loading, disabled |
| AppBadge | Etiqueta de estado | color (green/red/yellow/blue/gray) |
| AppModal | Modal / diálogo | modelValue (open), title, size |
| AppAlert | Notificación inline | type (info/success/warning/error) |
| AppConfirm | Diálogo de confirmación | title, message, confirmLabel, cancelLabel |

### CAPA 2 — patterns/

| Componente | Propósito | Estado |
|---|---|---|
| **DataTable** | Tabla con search, sort, pagination, striped, add button | ✅ Construido |
| **TabbedPanel** | Tabs con slots dinámicos, scroll, badges, footer | ✅ Construido |
| FormField | Wrapper inteligente: detecta type y renderiza el base/ correcto | ❌ Pendiente |
| FormSection | Grid + título de sección para formularios | ❌ Pendiente |
| FilterPanel | Panel de filtros declarativo con apply/clear | ❌ Pendiente |
| CrudHeader | Header de página (título + breadcrumbs + acciones) | ❌ Pendiente |
| DetailCard | Card de solo lectura para vista Show | ❌ Pendiente |
| DeleteConfirm | Confirmación de eliminación con nombre de entidad | ❌ Pendiente |

---

## 4. Convenciones de Diseño

### Tokens Visuales
- **Primario**: #3b82f6 (blue-600)
- **Hover primario**: #2563eb (blue-700)
- **Active primario**: #1d4ed8 (blue-800)
- **Texto principal**: #1e293b (slate-800)
- **Texto secundario**: #64748b (slate-500)
- **Bordes**: #e2e8f0 (slate-200)
- **Fondo card**: #ffffff
- **Fondo striped**: #f8fafc (slate-50)
- **Fondo header tabla**: #f1f5f9 (slate-100)
- **Fondo footer**: #fafbfd

### Dimensiones
- **Border-radius cards**: 10px
- **Border-radius inputs/botones**: 6-8px
- **Altura inputs/botones**: 36px
- **Padding card header/footer**: 18-24px horizontal
- **Padding celdas tabla**: 10px 18px
- **itemsPerPage default**: 15
- **Font-size tabla header**: 11px uppercase
- **Font-size tabla celdas**: 13.5px
- **Font-size labels**: 12.5px
- **Font-weight celdas**: 500 (bold columnas con bold: true = 700)

### Prefijos CSS Scoped
- DataTable: `dt-`
- TabbedPanel: `tp-`
- FormSection: `fs-`
- FormField: `ff-`
- FilterPanel: `fp-`
- CrudHeader: `ch-`
- AppButton: `ab-`
- AppInput: `ai-`
- AppSelect: `as-`

### Reglas de Estilo
- SIEMPRE usar scoped CSS con prefijos
- NUNCA usar Tailwind dentro de componentes base/ y patterns/
- Tailwind OK en pages/ para layout y spacing
- Transiciones: 0.15s ease para hover/focus
- Focus ring: `box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12)`

---

## 5. Config Declarativa

Cada entidad CRUD se define en `config/crud/[entidad].ts`. Este archivo es la ÚNICA fuente de verdad para:

```ts
// config/crud/legajos.ts
import type { Column } from '@/components/patterns/DataTable.vue'
import type { Tab } from '@/components/patterns/TabbedPanel.vue'

export const columns: Column[] = [
    { key: 'legajo', label: 'Legajo', sortable: true, width: '100px' },
    { key: 'cuil', label: 'CUIL', width: '150px' },
    { key: 'nombre', label: 'Apellido y Nombres', sortable: true, bold: true },
    { key: 'fecha_nacimiento', label: 'Fecha Nac.', width: '170px' },
    { key: 'sexo', label: 'Sexo', width: '110px', align: 'center' },
]

export const filters = [
    { key: 'legajo', label: 'Legajo', type: 'text', condition: 'equals' },
    { key: 'documento', label: 'Documento', type: 'text', condition: 'equals' },
    { key: 'nombre', label: 'Nombre', type: 'text', condition: 'contains' },
]

export const tabs: Tab[] = [
    { key: 'datos_personales', label: 'Datos Personales' },
    { key: 'antiguedades', label: 'Antigüedades' },
    // ...
]

export const formSections = [
    {
        title: null,
        columns: 2,
        fields: [
            { key: 'legajo', label: 'Legajo', type: 'text' },
            { key: 'localizacion', label: 'Localización', type: 'text' },
        ]
    },
    {
        title: 'Datos de Nacimiento',
        columns: 2,
        fields: [
            { key: 'fecha_nacimiento', label: 'Fecha', type: 'date', required: true },
            { key: 'localidad', label: 'Localidad', type: 'text' },
            { key: 'provincia', label: 'Provincia', type: 'select', options: 'provincias' },
        ]
    },
]

export const rules = {
    nombre: 'required|min:2',
    apellido: 'required',
    dni: 'required|numeric',
}

export const routes = {
    index: 'personal.legajos.index',
    create: 'personal.legajos.create',
    store: 'personal.legajos.store',
    show: 'personal.legajos.show',
    edit: 'personal.legajos.edit',
    update: 'personal.legajos.update',
    destroy: 'personal.legajos.destroy',
}
```

---

## 6. Patrones de Página

### Index (Listado) — ~30 líneas

```vue
<script setup lang="ts">
import DataTable from '@/components/patterns/DataTable.vue'
import FilterPanel from '@/components/patterns/FilterPanel.vue'
import { columns, filters, routes } from '@/config/crud/legajos'
import { useFilters } from '@/composables/useFilters'
import { useCrud } from '@/composables/useCrud'

const props = defineProps<{ legajos: any[] }>()
const { apply, clear, activeFilters } = useFilters(filters)
const { create, show, destroy } = useCrud(routes)
</script>

<template>
    <FilterPanel :filters="filters" v-model="activeFilters" @apply="apply" @clear="clear" />
    <DataTable :columns="columns" :data="legajos" title="Legajos"
        add-label="+ Agregar" pagination @add="create">
        <template #actions="{ row }">
            <button @click="show(row.id)">Ver</button>
            <button @click="destroy(row.id)">Eliminar</button>
        </template>
    </DataTable>
</template>
```

### Create/Edit (Formulario con Tabs) — ~50 líneas

```vue
<script setup lang="ts">
import TabbedPanel from '@/components/patterns/TabbedPanel.vue'
import FormSection from '@/components/patterns/FormSection.vue'
import FormField from '@/components/patterns/FormField.vue'
import AppButton from '@/components/base/AppButton.vue'
import { tabs, formSections, rules, routes } from '@/config/crud/legajos'
import { useAppForm } from '@/composables/useForm'

const props = defineProps<{ legajo?: any }>()
const isEdit = computed(() => !!props.legajo)
const { form, submit, reset } = useAppForm(
    props.legajo || {},
    { rules, route: isEdit.value ? routes.update : routes.store }
)
const currentTab = ref('datos_personales')
</script>

<template>
    <TabbedPanel v-model="currentTab" :tabs="tabs" show-footer>
        <template #datos_personales>
            <FormSection v-for="s in formSections" :key="s.title" v-bind="s">
                <FormField v-for="f in s.fields" :key="f.key"
                    v-model="form[f.key]" v-bind="f" :error="form.errors[f.key]" />
            </FormSection>
        </template>
        <template #footer>
            <AppButton variant="secondary" @click="reset">Cancelar</AppButton>
            <AppButton variant="primary" :loading="form.processing" @click="submit">
                {{ isEdit ? 'Actualizar' : 'Grabar' }}
            </AppButton>
        </template>
    </TabbedPanel>
</template>
```

---

## 7. Composables

### useCrud(routes)
```ts
// Retorna: { create, show, edit, destroy, items, loading }
// create()     → router.visit(route(routes.create))
// show(id)     → router.visit(route(routes.show, id))
// edit(id)     → router.visit(route(routes.edit, id))
// destroy(id)  → confirma + router.delete(route(routes.destroy, id))
```

### useFilters(filterDefs)
```ts
// Retorna: { filters, activeFilters, apply, clear, isFiltered }
// Sincroniza con query params de la URL
// apply() → router.get(url, activeFilters)
```

### useForm(initialData, { rules, route })
```ts
// Wrapper sobre Inertia useForm + validación client-side
// Retorna: { form, submit, reset, isDirty }
```

---

## 8. Orden de Implementación

```
✅ DataTable         — Construido
✅ TabbedPanel       — Construido
❌ AppInput          — Siguiente
❌ AppSelect         — Siguiente
❌ AppButton         — Siguiente
❌ AppTextarea
❌ AppDatePicker
❌ AppBadge
❌ FormField         — Después de base/
❌ FormSection
❌ FilterPanel
❌ CrudHeader
❌ AppModal
❌ AppConfirm
❌ useForm
❌ useFilters
❌ useCrud
```

---

## 9. Reglas para Claude Code

- Al crear un componente nuevo, VERIFICAR que no exista ya en base/ o patterns/
- Al crear una página CRUD, SIEMPRE empezar por el config/crud/[entidad].ts
- NUNCA hardcodear columnas, filtros o tabs en las páginas — van en config
- NUNCA crear HTML de formularios sin usar FormField + FormSection
- Para componentes nuevos: seguir la convención de prefijo CSS, exportar interface de props, usar scoped styles
- Las páginas SOLO hacen composición, CERO lógica de presentación