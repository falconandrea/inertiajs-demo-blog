<template>
    <div class="mt-2 p-2 bg-gray-200">
        <small class="font-bold">{{ comment.name }} - {{ comment.created_at }}</small>
        <template v-if="logged">
            <Link :href="deleteUrl" method="delete" as="button" type="button" class="text-sm underline ml-4">Delete comment</Link>
        </template>
        <br>
        <p>{{ comment.comment }}</p>
    </div>
</template>

<script>
export default {
    props: {
        comment: Object,
        logged: Boolean
    },
    computed: {
        deleteUrl() {
            return '/comments/' + this.comment.id
        }
    }
}
</script>
