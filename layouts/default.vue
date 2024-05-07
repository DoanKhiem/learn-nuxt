<template>
    <div>
      <DefaultHeader />
    <!-- <p>Some default layout content shared across all pages</p> -->
    <slot />
  </div>
</template>

<script setup lang="ts">
import DefaultHeader from '~/components/Header/DefaultHeader.vue';
</script>

<style scoped>

</style>