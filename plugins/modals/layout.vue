<template>
    <div modal="true">
        <div :data-moda="name" v-if="visible" class="modal">
            <div aria-modal="true" data-reach-dialog-content="true" tabindex="-1" class="modal_mask">
                <div class="modal__body">
                    <slot :payload="payload" />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
const props = defineProps({
    name: {
        type: String,
        required: true
    }
})
const payload = ref(null)
const 
</script>

<style scoped></style>