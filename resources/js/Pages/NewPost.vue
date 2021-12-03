<template>
    <div class="mb-8 px-4">
        <h4 class="font-bold font-sans mt-4 mb-4">New post</h4>
        <form @submit.prevent="submitForm">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input v-model="formData.title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" required placeholder="Title" />
                <small v-if="formData.errors.title" v-text="formData.errors.title" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea v-model="formData.description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" required placeholder="Description"></textarea>
                <small v-if="formData.errors.description" v-text="formData.errors.description" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" :disabled="formData.processing">
                    Save
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

let formData = useForm({
    title: '',
    description: ''
})
let submitForm = () => {
    formData.post('/post', formData);
}
</script>
