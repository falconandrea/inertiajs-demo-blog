<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="This is the Blog Homepage" head-key="description" />
    </Head>
    <input type="text" v-model="search" name="search" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Cerca nei post.." />
    <short-post v-for="post in posts.data" :key="post.id" :post="post"/>
    <paginate :links="posts.links"/>
</template>

<script>
import { ref, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import debouce from 'lodash/debounce'
import ShortPost from '../Shared/ShortPost.vue'
import Paginate from '../Shared/Paginate.vue'
export default {
    components: {
        ShortPost, Paginate
    },
    props: {
        posts: Object,
        filters: Object
    },
    data() {
        return {
            search: ref(this.$props.filters.search)
        }
    },
    watch: {
        search(newValue) {
            this.searchPosts(newValue)
        }
    },
    methods: {
        searchPosts: debouce(function(string){
            Inertia.get('/', { search: string }, {
                preserveState: true,
                replace: true
            })
        }, 100)
    }
}
</script>
