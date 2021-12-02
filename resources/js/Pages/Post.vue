<template>
    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal pb-8">
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                {{ post.title }}
            </h1>
            <p class="text-sm md:text-base font-normal text-gray-600">Published {{ post.created_at }}</p>
        </div>
        <div class="py-6">
            {{ post.description }}
        </div>

        <hr />
        <h4 class="font-bold font-sans mt-4">Commenti:</h4>
        <comment v-for="comment in comments" :key="comment.id" :comment="comment" />
    </div>
</template>

<script>
import Comment from '../Shared/Comment.vue'
export default {
    components: {
        Comment
    },
    props: {
        post: Object,
        comments: Array
    }
}
</script>
