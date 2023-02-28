<template lang="">
  <div v-for="listing in listings" :key="listing.id">
    <div>
      <Link :href="route('listing.show',{listing: listing.id})">
        <ListingAdress :listing="listing" />
      </Link>
    </div>
    <div>
      <Link :href="route('listing.edit', {listing:listing.id})">Edit</Link>
    </div>
    <div>
      <Link :href="route('listing.destroy',{listing:listing.id})" method="Delete" as="button">Delete</Link>
    </div>
  </div>
</template>
<script setup>
import ListingAdress from '@/Components/ListingAdress.vue'
import {Link} from '@inertiajs/vue3'
defineProps({
  listings:Array,
})


</script>