<template>
    <div>
        <hr />
        <h4 class="font-bold font-sans mt-4">Commenti:</h4>
        <div v-if="comments.length > 0">
            <comment v-for="comment in comments" :key="comment.id" :comment="comment" />
        </div>
        <small v-if="comments.length <= 0">Attualmente non ci sono commenti</small>
    </div>
</template>

<script>
import Comment from '../Shared/Comment.vue'
export default {
    components: {
        Comment
    },
    props: {
        comments: Array
    }
}
</script>
