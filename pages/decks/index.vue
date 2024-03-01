<template>
    <div>
        <h1>Your Decks, please enter number of deck to show:</h1>
        <input type="text" v-model="deckID" placeholder="Please enter deckID">
        <button @click="showDeck">Go to Deck</button>
    </div>
</template>

<script setup>
import { useRouter, useRoute } from 'vue-router'
import { ref, onMounted } from 'vue'
const router = useRouter()
const deckID = ref('1')
const showDeck = () => {
    router.push(`decks/${deckID.value}`)
}
</script>