<template>
    <div>
      <h1>Hello world {{ name }}</h1>

<!-- Pegando array que esta nas rotas através do props  -->
      <p>Uso os seguintes frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>

<Nav />

</template>

<script>
import Nav from "../Shared/Nav.vue";

export default {
    name: 'home',
    components:{ Nav },
    props: {
        name: String,
        frameworks: Array
    },
};
</script>

<style>
 h1 {
     font-family: bold;
     font-size: 50px;
 }

 p {
     font-family: bold;
     font-size: 25px;
 }

 li {
     font-size: 20px;
 }
</style>
