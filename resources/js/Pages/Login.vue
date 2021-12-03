<template>
    <div class="mb-8">
        <h4 class="font-bold font-sans mt-4 mb-4">Login</h4>
        <form @submit.prevent="submitForm">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input v-model="formData.email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" required placeholder="Email" />
                <small v-if="formData.errors.email" v-text="formData.errors.email" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input v-model="formData.password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" required placeholder="Password" />
                <small v-if="formData.errors.password" v-text="formData.errors.password" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" :disabled="formData.processing">
                    Login
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

let formData = useForm({
    email: '',
    password: ''
})
let submitForm = () => {
    formData.post('/login', formData);
}
</script>
