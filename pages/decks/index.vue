<template>
    <div>
        <h1>Decks</h1>
        <span>Please enter number of deck to show:</span>
        <input type="text" v-model="deckID" placeholder="Please enter deck id">
        <button @click="showDeck">Go to Deck</button>
    </div>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';
import { ref } from 'vue';

const router = useRouter();
const deckID = ref('');
const showDeck = () => {
    router.push(`/decks/${deckID.value}`);
}
</script>

<style scoped>

</style>