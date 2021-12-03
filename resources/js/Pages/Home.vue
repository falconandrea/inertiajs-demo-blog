<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="This is the Blog Homepage" head-key="description" />
    </Head>
    <div class="px-4">
        <h6 v-if="username" class="mb-4 font-bold">
            Benvenuto, {{ username }}
        </h6>
        <input type="text" v-model="search" name="search" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Cerca nei post.." />
        <short-post v-for="post in posts.data" :key="post.id" :post="post" :logged="logged"/>
        <paginate :links="posts.links"/>
    </div>
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
    computed: {
        username() {
            return (this.$page.props.auth && this.$page.props.auth.user) ? this.$page.props.auth.user.name : null
        },
        logged() {
            return this.username ? true : false
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
