<template>
    <div class="mt-2 p-2 bg-gray-200">
        <small class="font-bold">{{ comment.name }} - {{ comment.created_at }}</small><br>
        <p>{{ comment.comment }}</p>
    </div>
</template>

<script>
export default {
    props: {
        comment: Object
    },
}
</script>
