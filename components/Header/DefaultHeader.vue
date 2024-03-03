<template>
    <header>
        <nav>
            <ul>
                <li>
                    <NuxtLink to="/">Home</NuxtLink>
                </li>
                <li>
                    <NuxtLink to="/decks">Decks</NuxtLink>
                </li>
                <li>
                    <NuxtLink to="/profile">Profile</NuxtLink>
                </li>
                <li>
                    <NuxtLink to="/settings">Settings</NuxtLink>
                </li>
            </ul>
        </nav>
    </header>
</template>

<style>
header {
    background: #000;
    color: #fff;
    height: 60px;
}
ul {
    display: flex;
    justify-content: center;
    list-style: none;
    margin: 0;
    padding: 0;
}
</style>
