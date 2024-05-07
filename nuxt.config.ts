// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  app: {
    head: {
      link: [{ rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap' }]
    }
  },
  css: ['~/assets/css/main.min.css', '~/assets/css/external.css'],
})
