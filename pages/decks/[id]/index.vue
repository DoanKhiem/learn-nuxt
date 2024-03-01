<template>
    <h1>
        Your desk id is: {{ $route.params.id }}
    </h1>
</template>

<script setup>
definePageMeta({
    validate: async (route) => {
        // Check if the id is made up of digits
        return /^[0-9]{9,12}$/.test(route.params.id)
    }
})
</script>