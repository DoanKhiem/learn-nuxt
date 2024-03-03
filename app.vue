<template>
  <div>
    <!-- <NuxtPage /> -->
    <NuxtLayout :name="layout">

    </NuxtLayout>
    <h1>sdđ</h1>
    <NuxtPage />
  </div>

</template>

<script setup>
// You might choose this based on an API call or logged-in status
const layout = "public";
</script>
