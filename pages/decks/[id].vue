<template>
    <div>
        <h1>Deck {{ id }}</h1>
    </div>
</template>

<script setup lang="ts">
const { id } = useRoute().params;
definePageMeta({
  validate: async ({ params }) => {
    // Check if the id is made up of digits
    return typeof params.id === 'string' && /^\d+$/.test(params.id)
  }
})
</script>

<style scoped>

</style>