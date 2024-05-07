<template>
    <div class="container">
        <h3>List of your decks:</h3>
        <ul class="decks">
            <li>
                <div class="card deck-card">
                    <img src="https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg" alt="Thumbnail card">
                    <div class="card-body">
                        <h3>Title card</h3>
                        <p>Description card</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card deck-card">
                    <img src="https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg" alt="Thumbnail card">
                    <div class="card-body">
                        <h3>Title card</h3>
                        <p>Description card</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card deck-card">
                    <img src="https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg" alt="Thumbnail card">
                    <div class="card-body">
                        <h3>Title card</h3>
                        <p>Description card</p>
                    </div>
                </div>
            </li>
        </ul>
        <!-- <div class="mb-3 col-2">
            <label for="exampleFormControlInput1" class="form-label">Please enter number of deck to show:</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" v-model="deckID"
                placeholder="Please enter deck id">
        </div>
        <button type="button" class="btn btn-primary" @click="showDeck">Go to Deck</button> -->
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
.decks {
    margin: 0;
    padding: 0;
    li {
        list-style: none;
        margin-bottom: 1rem;
        &:last-child {
            margin-bottom: 0;
        }
    }
    .deck-card {
        display: flex;
        flex-direction: row;
        height: 250px;
        img {
            width: 250px;
            height: auto;
        }
    }
}

</style>