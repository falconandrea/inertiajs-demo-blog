<template>
    <div>
        <hr class="mt-6" />
        <h4 class="font-bold font-sans mt-4">Lascia un commento:</h4>
        <form @submit.prevent="submitForm">
            <input type="hidden" name="post_id" v-model="formData.post_id" />
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nome
                </label>
                <input v-model="formData.name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Nome" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                    Commento
                </label>
                <textarea v-model="formData.comment" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" name="comment" placeholder="Commento" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Invia
                </button>
            </div>
        </form>
        {{ formData }}
    </div>
</template>

<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
    postId: Number
})

let formData = reactive({
    name: '',
    comment: '',
    post_id: props.postId
})
let submitForm = () => {
    Inertia.post('/comments', formData);
}
</script>
