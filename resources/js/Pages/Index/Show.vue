<template>
  <div>Show</div>
  <Link href="/">Home</Link>
  <h1>The message is: {{ message }}</h1>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  message: String,
})
</script>
