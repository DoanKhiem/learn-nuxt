<template>
    <div>
        <header>
            <nav>
                <nuxt-link to="/">Nuxt Khiem</nuxt-link>
                <ul>
                    <li><nuxt-link to="/">Home</nuxt-link></li>
                    <li><nuxt-link to="/about">About</nuxt-link></li>
                    <li><nuxt-link to="/products">Product</nuxt-link></li>
                </ul>
            </nav>
        </header>
        <!-- output the page content -->
        <div>
            <slot />
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped>
.route-link-exact-active {
    color: #12b488;
}
</style>