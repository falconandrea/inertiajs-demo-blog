<template>
    <short-post v-for="post in posts" :key="post.id" :post="post"/>

    <!--Divider-->
    <hr class="border-b-2 border-gray-400 mb-8 mx-4">

    <subscribe-form />

    <!--Divider-->
    <hr class="border-b-2 border-gray-400 mb-8 mx-4">
</template>

<script>
import ShortPost from '../Shared/ShortPost.vue'
import SubscribeForm from "../Shared/SubscribeForm.vue"
export default {
    components: {
        SubscribeForm, ShortPost
    },
    props: {
        posts: Array
    }
}
</script>

<style>

</style>
