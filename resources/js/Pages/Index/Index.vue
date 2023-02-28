<template>
  <div>Index</div>
  <Link href="/hello">Show</Link>
  <div>THe message is: {{ message }}</div>
  <div>hello</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  message: String,
})
</script>
