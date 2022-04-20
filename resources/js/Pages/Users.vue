<template>
  <Layout>
    <h1 class="text-3xl font-bold">
      Users
    </h1>

    <div style="margin-top: 400px">
      <p>The current time is {{ time }}.</p>

      <Link
        href="/users"
        class="text-blue-500 preserve-scroll"
      >
         Refresh
      </Link>
  </div>
</Layout>

</template>

<script>


import { Link } from "@inertiajs/inertia-vue3"
import Layout from "../Shared/Layout";

export default {
   name: 'home',
    components: { Layout, Link },
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
