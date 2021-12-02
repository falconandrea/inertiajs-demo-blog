<template>
    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal pb-8">
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                {{ post.title }}
            </h1>
            <p class="text-sm md:text-base font-normal text-gray-600">Published {{ post.created_at }}</p>
        </div>
        <div class="py-6">
            {{ post.description }}
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: Object
    }
}
</script>
