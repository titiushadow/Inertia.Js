<template>
  <Layout>

  <Head title="Users"/>

      <h1 class="text-3xl font-bold">Users</h1>
      <div class="flex items-center">
            <p class="text-md ml-4">
                Welcome Back, {{ name }}!
            </p>
      </div>
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


<script setup>

defineProps({
    time: String,
    name: String,
});
</script>


<style>

p {
    font-family: bold;
    font-size: 25px;
}

</style>
