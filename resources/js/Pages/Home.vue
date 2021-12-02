<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="This is the Blog Homepage" head-key="description" />
    </Head>
    <short-post v-for="post in posts" :key="post.id" :post="post"/>
</template>

<script>
import ShortPost from '../Shared/ShortPost.vue'
export default {
    components: {
        ShortPost
    },
    props: {
        posts: Array
    }
}
</script>
