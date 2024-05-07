<template>
    <h1>Decks</h1>
    <div class="mb-3 col-2">
        <label for="exampleFormControlInput1" class="form-label">Please enter number of deck to show:</label>
        <input class="form-control" id="exampleFormControlInput1" type="text" v-model="deckID" placeholder="Please enter deck id">
    </div>
    <button type="button" class="btn btn-primary" @click="showDeck">Go to Deck</button>
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