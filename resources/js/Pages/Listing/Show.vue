<template>
  <div>
    <ListingAdress :listing="listing" />
  </div>
</template>

<script setup>
import ListingAdress from '@/Components/ListingAdress.vue'
defineProps({
  listing:Object,
})

</script>