<template>
    <Header />
    <div class="container w-full md:max-w-3xl mx-auto pt-20">
        <slot />
    </div>
    <Footer />
</template>

<script>
import Header from './Header'
import Footer from './Footer'
export default {
    components: {
        Header, Footer
    }
}
</script>

<style>

</style>
