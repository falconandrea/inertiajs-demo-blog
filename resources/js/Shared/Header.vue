<template>
  <nav id="header" class="fixed w-full z-10 top-0 bg-white border-b-2 border-gray-100">
		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
			<div class="flex justify-between w-full px-4">
				<Link href="/" class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl">
					Demo Blog
				</Link>
                <nav>
                    <Link href="/about" class="text-gray-900 text-base hover:underline font-bold ml-4" :class="{ 'underline active': $page.url === '/about' }">About me</Link>
                    <Link v-if="!logged" href="/login" class="text-gray-900 text-base hover:underline font-bold ml-4" :class="{ 'underline active': $page.url === '/login' }">Login</Link>
                    <Link v-if="logged" href="/post" class="text-gray-900 text-base hover:underline font-bold ml-4" :class="{ 'underline active': $page.url === '/post' }">New post</Link>
                    <Link v-if="logged" href="/logout" class="text-gray-900 text-base hover:underline font-bold ml-4" method="post" as="button" type="button">Logout</Link>
                </nav>
			</div>
		</div>
	</nav>
</template>

<script>
export default {
    computed: {
        logged() {
            return (this.$page.props.auth && this.$page.props.auth.user) ? true : false
        }
    },
}
</script>
