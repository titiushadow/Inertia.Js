<template>

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

         <iframe
        class="mb-6"
        width="100%"
        frameborder="no"
        scrolling="no"
        seamless
        src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"
      />

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
