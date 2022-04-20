<template>
  <h1>Users</h1>
  <Nav />

  <div>
      <p>A hora correta é {{ time }}</p>

      <Link href="/users" class="text-blue-500 preserve-scroll">
         Refresh
      </Link>
  </div>
</template>

<script>

import Nav from "../Shared/Nav.vue";
import { Link } from "@inertiajs/inertia-vue3"

export default {
   name: 'home',
    components:{ Nav, Link },
    props: { time: String }
};
</script>

<style>

p {
    font-family: bold;
    font-size: 20px;
    margin-top: 400px;
}

</style>
