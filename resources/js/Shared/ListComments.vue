<template>
    <div>
        <hr />
        <h4 class="font-bold font-sans mt-4">Comments:</h4>
        <div v-if="comments.length > 0">
            <comment v-for="comment in comments" :key="comment.id" :comment="comment" :logged="logged" />
        </div>
        <small v-if="comments.length <= 0">Currently there are no comments</small>
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
    },
    computed: {
        logged() {
            return (this.$page.props.auth && this.$page.props.auth.user) ? true : false
        }
    }
}
</script>
