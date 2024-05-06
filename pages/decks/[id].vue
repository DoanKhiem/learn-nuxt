<template>
    <div>
        <h1>Deck {{ id }}</h1>
    </div>
</template>

<script setup lang="ts">
const { id } = useRoute().params;
</script>

<style scoped>

</style>