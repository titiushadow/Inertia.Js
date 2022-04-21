<template>
<Layout>
      <h1 class="text-3xl font-bold">Settings</h1>
      <div class="flex items-center">
            <p class="text-md ml-4">
                Welcome Back, {{ name }}!
            </p>
      </div>
  </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue"

defineProps({
    name: String,
});
</script>

<style>

p {
    font-family: bold;
    font-size: 25px;
}

</style>
