<template>
    <div class="w-full text-xl text-gray-800 leading-normal">
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl hover:text-green-400">
                <Link :href="url" title="">{{ post.title }}</Link>
            </h1>
            <p class="text-sm md:text-base font-normal text-gray-600">
                Published {{ post.format_date }}
                <span v-if="logged">
                    - <Link :href="editUrl" class="font-xs underline">Edit Post</Link>
                    - <Link :href="url" method="delete" as="button" type="button" class="font-xs underline">Delete Post</Link>
                </span>
            </p>
        </div>
        <p class="py-6">
            {{ post.intro }}
        </p>
    </div>
</template>

<script>
export default {
    props: {
        post: Object,
        logged: Boolean
    },
    computed: {
        url() {
            return "/post/" + this.post.id
        },
        editUrl() {
            return this.url + '/edit'
        }
    }
}
</script>
