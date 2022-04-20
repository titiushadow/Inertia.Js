<template>
<Layout>
    <h1 class="text-3xl font-bold">Home</h1>
</Layout>

<!-- Pegando array que esta nas rotas através do props  -->
      <!-- <p>Uso os seguintes frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div> -->

</template>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    name: 'home',
    components:{ Layout },
    props: {
        // name: String,
        // frameworks: Array
    },
};
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
