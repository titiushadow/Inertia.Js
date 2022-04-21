<template>
<Layout>
    <h1 class="text-3xl font-bold">Home</h1>
      <div class="flex items-center">
            <p class="text-md ml-4">
                Welcome Back, {{ name }}!
            </p>
      </div>
</Layout>

<!-- Pegando array que esta nas rotas através do props  -->
      <!-- <p>Uso os seguintes frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div> -->

</template>

<script setup>
import Layout from "../Shared/Layout.vue";

Layout: Layout

defineProps({
    name: String,
});
</script>

<style>

 p {
     font-family: bold;
     font-size: 25px;
 }

 li {
     font-size: 20px;
 }
</style>
