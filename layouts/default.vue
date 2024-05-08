<template>
    <div>
      <DefaultHeader />
    <!-- <p>Some default layout content shared across all pages</p> -->
    <slot />
    <DefaultFooter />
  </div>
</template>

<script setup lang="ts">
import DefaultFooter from '~/components/Footer/DefaultFooter.vue';
import DefaultHeader from '~/components/Header/DefaultHeader.vue';
</script>

<style scoped>

</style>