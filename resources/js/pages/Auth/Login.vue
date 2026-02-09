<script setup lang="ts">
import { Head, router } from '@inertiajs/vue3'
import { ref } from 'vue'

const email = ref('')
const password = ref('')
const error = ref('')

function handleLogin() {
    if (email.value === 'admin@admin.com' && password.value === 'admin') {
        error.value = ''
        router.visit('/dashboard')
    } else {
        error.value = 'Credenciales incorrectas. Use admin@admin.com / admin'
    }
}
</script>

<template>
    <Head title="Iniciar Sesión" />

    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Sistema de Personal</h1>
                    <p class="text-gray-500 mt-1">Ingrese sus credenciales</p>
                </div>

                <form @submit.prevent="handleLogin" class="space-y-5">
                    <div v-if="error" class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded text-sm">
                        {{ error }}
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <input
                            id="email"
                            v-model="email"
                            type="email"
                            required
                            autofocus
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="admin@admin.com"
                        />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Contraseña
                        </label>
                        <input
                            id="password"
                            v-model="password"
                            type="password"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••"
                        />
                    </div>

                    <div class="flex items-center">
                        <input
                            id="remember"
                            type="checkbox"
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        />
                        <label for="remember" class="ml-2 text-sm text-gray-600">
                            Recordarme
                        </label>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium"
                    >
                        Iniciar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
