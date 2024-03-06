export default defineEventHandler(async (event) => {
    const { code } = event.context.params
    const { currencyKey } = useRuntimeConfig()
    const uri = `https://${currencyKey}.mockapi.io/demo/${code}`
    const data = await $fetch(uri)
    return data
})