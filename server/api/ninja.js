export default defineEventHandler(async (event) => {

    // handle query params
    const { name } = getQuery(event)

    //handle post data
    const { age} = await readBody(event)

    //api call with private key
    const { data } = await $fetch()

    return {
        message: `Hello, ${name}! Your are ${age} years old.`
    }
})