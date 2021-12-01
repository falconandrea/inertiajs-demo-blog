<template>
    <Layout>
        <short-post v-for="post in posts" :key="post.id" :post="post"/>

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

        <subscribe-form />

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 mb-8 mx-4">

		<!--Next & Prev Links-->
		<div class="font-sans flex justify-between content-center px-4 pb-12">
			<div class="text-left">
				<span class="text-xs md:text-sm font-normal text-gray-600">&lt; Previous Post</span><br>
				<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
			</div>
			<div class="text-right">
				<span class="text-xs md:text-sm font-normal text-gray-600">Next Post &gt;</span><br>
				<p><a href="#" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog title</a></p>
			</div>
		</div>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue"
import ShortPost from '../Shared/ShortPost.vue'
import SubscribeForm from "../Shared/SubscribeForm.vue"
export default {
    components: {
        Layout, SubscribeForm, ShortPost
    },
    props: {
        posts: Array
    }
}
</script>

<style>

</style>
