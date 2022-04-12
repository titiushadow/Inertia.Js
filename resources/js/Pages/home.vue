<template>
  <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
        </header>

        <article>
            <slot />
        </article>
    </main>

    <div>
        <h1>ola</h1>
    </div>

</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Layout",
    components: {
        Link,
    },
};

</script>

<style>

</style>
