<template>
    <div class="w-full px-4 md:px-0 text-xl text-gray-800 leading-normal">
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl hover:text-green-400">
                <Link :href="url" title="">{{ post.title }}</Link>
            </h1>
            <p class="text-sm md:text-base font-normal text-gray-600">Published {{ post.format_date }}</p>
        </div>
        <p class="py-6">
            {{ post.intro }}
        </p>
    </div>
</template>

<script>
export default {
    props: {
        post: Object
    },
    computed: {
        url() {
            return "/post/" + this.post.id
        }
    }
}
</script>
