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
                <a href="/about">normal link -- about page</a>
            </nav>
        </header>
        <h2>Home</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At necessitatibus dolore a temporibus libero
            aliquid distinctio, sunt ad est, nesciunt laborum tempora ipsum repudiandae deserunt cumque maiores totam
            adipisci. Doloribus?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quod culpa, eaque harum exercitationem
            blanditiis dignissimos, dolor sapiente ex ut ducimus temporibus totam dolorem soluta fugiat. At natus
            laudantium, ducimus impedit iusto magni odit voluptas. Sed dolor quaerat vero earum!</p>
    </div>
</template>

<script setup>

</script>

<style scoped>
h2 {
    margin-bottom: 20px;
    font-size: 36px;
}
p {
    margin: 20px 0;
}
</style>