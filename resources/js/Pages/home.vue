<template>
    <div>
      <h1>Hello world {{ name }}</h1>
      <p>Uso os seguintes frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'home',
    props: {
        name: String,
        frameworks: Array
    },
}
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
