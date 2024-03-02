<template>
  <div>
    <!-- <NuxtPage /> -->
    <NuxtLayout :name="layout">
      
  </NuxtLayout>
  <NuxtPage />
  </div>
  
</template>
<script setup>
// You might choose this based on an API call or logged-in status
const layout = "public";
</script>
