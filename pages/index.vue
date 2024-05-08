<template>
    <div class="container">
        <div class="banner mt-5">
            <div class="thumbnail-banner"></div>
        </div>
        <div class="popular-decks">
            <h3 class="text-center my-3">3 Popular Decks For You</h3>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        Deck 1
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        Deck 1
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        Deck 1
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
</script>

<style scoped>
.banner {
    height: 500px;
    .thumbnail-banner {
        background: url('/assets/images/banner.jpg') center center;
        background-size: cover;
        height: inherit;
    }
}
</style>