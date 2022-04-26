<template>
    <Head title="My App" />

<section class="p-6 bg-gray-200">
    <header class="flex justify-between">
        <h1 class="font-bold text-lg">
            My Website
        </h1>
        <Nav />
    </header>
</section>

<section class="p-6">
    <div class="max-w-3xl mx-auto">
        <slot />
    </div>
</section>

</template>

<script>
import Nav from "./Nav"

export default {
    components: { Nav },

}
</script>

<style>

</style>
