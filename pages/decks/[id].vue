<template>
  <section class="mt-5 ">
    <div class="container text-center">
      <h3>Deck #{{ id }}: Learn Englist By Sky Albert</h3>
      <div class="tools">
        <button class="btn btn-primary me-2">Start now</button>
        <button class="btn btn-primary" @click="isOpen = true">Create a card</button>
      </div>
      <hr class="my-5">
      <div class="row cards">
        <div class="col-3" v-for="item in cards" :key="item.id">
          <div class="card">
            <div class="front-card">
              <img :src="item.thumbnail"
                :alt="'Thumbnail card' + item.thumbnail">
            </div>
            <div class="back-card">
              <h6>Shop</h6>
              <h6>{{ item.title }}</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <UModal v-model="isOpen" prevent-close name="create-deck">
      <UCard :ui="{ ring: '', divide: 'divide-y divide-gray-100 dark:divide-gray-800' }">
        <template #header>
          <div class="flex items-center justify-between">
            <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-white">
              Modal
            </h3>
            <UButton color="gray" variant="ghost" icon="i-heroicons-x-mark-20-solid" class="-my-1"
              @click="isOpen = false" />
          </div>
        </template>
        <Placeholder class="h-32">
          <UForm :state="state" class="space-y-4" @submit="onSubmit">
            <UFormGroup label="Name" name="name">
              <UInput v-model="state.name" placeholder="Please enter name" />
            </UFormGroup>
            <UFormGroup name="textarea" label="Textarea">
              <UTextarea v-model="state.textarea" placeholder="Please enter textarea" />
            </UFormGroup>
            <UFormGroup label="File" name="file">
              <UInput v-model="state.file" type="file" />
              <div class="preview"></div>
            </UFormGroup>
            <UButton type="submit">
              Submit
            </UButton>
          </UForm>
        </Placeholder>
      </UCard>
    </UModal>
  </section>
</template>

<script setup lang="ts">
const { id } = useRoute().params;
import { ref } from 'vue';
import type { FormError, FormSubmitEvent } from '#ui/types'
// definePageMeta({
//   validate: async ({ params }) => {
//     // Check if the id is made up of digits
//     return typeof params.id === 'string' && /^\d+$/.test(params.id)
//   }
// })
const cards = ref([
  {
    id: 1,
    title: 'Title card 1',
    description: 'Description card 1',
    thumbnail: 'https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg',
  },
  {
    id: 2,
    title: 'Title card 2',
    description: 'Description card 2',
    thumbnail: 'https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg',
  },
  {
    id: 3,
    title: 'Title card 3',
    description: 'Description card 3',
    thumbnail: 'https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg',
  },
  {
    id: 4,
    title: 'Title card 4',
    description: 'Description card 4',
    thumbnail: 'https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg',
  }
])
const isOpen = ref(false)

const state = reactive({
  name: undefined,
  textarea: undefined,
  file: undefined,
})
async function onSubmit(event: FormSubmitEvent<any>) {
  // Do something with data
  console.log(event.data)
}
</script>

<style scoped>
img {
  width: 80%;
}
</style>