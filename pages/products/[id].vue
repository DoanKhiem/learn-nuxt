<template>
  <div>
    <p>Product details for {{ id }}</p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo debitis ipsa
      mollitia, in magnam beatae dolore deserunt asperiores rem obcaecati
      voluptates cumque blanditiis ab veniam quasi et numquam laborum impedit.
    </p>
  </div>
</template>

<script setup>
const { id } = useRoute().params;
definePageMeta({
  layout: 'products'
})
</script>