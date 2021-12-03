<template>
    <div>
        <hr class="mt-6" />
        <h4 class="font-bold font-sans mt-4">Add a comment:</h4>
        <form @submit.prevent="submitForm">
            <input type="hidden" name="post_id" v-model="formData.post_id" />
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Author name
                </label>
                <input v-model="formData.name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" required placeholder="Author name" />
                <small v-if="formData.errors.name" v-text="formData.errors.name" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                    Comment
                </label>
                <textarea v-model="formData.comment" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" name="comment" required placeholder="Comment"></textarea>
                <small v-if="formData.errors.comment" v-text="formData.errors.comment" class="text-red-500 text-xs mt-1"></small>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" :disabled="formData.processing">
                    Send
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

const props = defineProps({
    postId: Number
})

let formData = useForm({
    name: '',
    comment: '',
    post_id: props.postId
})
let submitForm = () => {
    formData.post('/comments', formData, {
        preserveScroll: (page) => Object.keys(page.props.errors).length
    });
}
</script>
