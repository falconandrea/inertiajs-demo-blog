<template>
    <div class="mt-4 mb-8 text-center">
        <template v-for="link in links" :key="link.label">
            <Link
            :href="link.url"
            v-html="link.label"
            v-if="link.url"
            class="mx-4"
            :class="{ 'font-bold underline': link.active }" />
        </template>
    </div>
</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>
