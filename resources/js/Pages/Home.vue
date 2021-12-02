<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="This is the Blog Homepage" head-key="description" />
    </Head>
    <short-post v-for="post in posts.data" :key="post.id" :post="post"/>
    <paginate :links="posts.links"/>
</template>

<script>
import ShortPost from '../Shared/ShortPost.vue'
import Paginate from '../Shared/Paginate.vue'
export default {
    components: {
        ShortPost, Paginate
    },
    props: {
        posts: Object
    }
}
</script>
