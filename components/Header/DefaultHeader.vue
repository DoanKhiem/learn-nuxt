<template>
    <header>
        <nav>
            <ul>
                <li>
                    <nuxt-link to="/">Home</nuxt-link>
                </li>
                <li>
                    <nuxt-link to="/decks">Decks</nuxt-link>
                </li>
                <li>
                    <nuxt-link to="/profile">Profile</nuxt-link>
                </li>
                <li>
                    <nuxt-link to="/settings">Profile</nuxt-link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script setup lang="ts">

</script>

<style scoped>
header {
    background-color: #000;
    color: #fff;
    height: 60px;
    nav, ul {
        height: inherit;
    }
    ul {
        align-items: center;
        display: flex;
        justify-content: center;
        list-style: none;
        margin: 0;
        padding: 0;
        li {
            margin: 0 1.5rem;
            a {
                color: #fff;
                text-decoration: none;
                &:hover {
                    text-decoration: underline;
                }
                &.router-link-exact-active {
                    color: red;
                }
            }
        }
    }
}
</style>