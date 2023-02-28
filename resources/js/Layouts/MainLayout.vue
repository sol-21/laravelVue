<template lang="">
  <Link href="/listing" class="space">Listings</Link> 

  <Link href="/listing/create">New Listing</Link>
  
  <div v-if="$page.props.flash.success" class="success">
    {{ $page.props.flash.success }}
  </div>
  <slot>Default</slot>
</template>

<script setup>


import { Link} from '@inertiajs/vue3' 

</script>

<style scoped>
.success {

background-color: green;
color: white;
}
.space {
margin-right: 100px;
}
</style>
