<template>
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h3>List of your decks:</h3>
            <UButton class="btn btn-primary" label="Create a Deck" @click="isOpen = true" />
        </div>
        <ul class="decks">
            <li v-for="item in decks" :key="item.id">
                <div class="card deck-card">
                    <img :src="item.thumbnail" :alt="`Thumbnail card` + item.thumbnail">
                    <nuxt-link :to="'/decks/' + item.id" class="card-body">
                        <h3>{{ item.title }}</h3>
                        <p>{{ item.description }}</p>
                    </nuxt-link>
                </div>
            </li>
        </ul>
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
                            <UInput v-model="state.name" placeholder="Please enter name"/>
                        </UFormGroup>
                        <UFormGroup name="textarea" label="Textarea" >
                            <UTextarea v-model="state.textarea" placeholder="Please enter textarea"/>
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
    </div>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';
import { ref } from 'vue';
import type { FormError, FormSubmitEvent } from '#ui/types'

const decks = ref([
  {
    id: 1,
    title: 'Title card 1',
    description: 'Description card 1',
    thumbnail: 'https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg',
  },
  {
    id: 2,
    title: 'Title card 2',
    description: 'Description card 2',
    thumbnail: 'https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg',
  },
  {
    id: 3,
    title: 'Title card 3',
    description: 'Description card 3',
    thumbnail: 'https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg',
  },
  {
    id: 4,
    title: 'Title card 4',
    description: 'Description card 4',
    thumbnail: 'https://mcdn.coolmate.me/image/March2023/meme-meo-2.jpg',
  }
])
const isOpen = ref(false)

const state = reactive({
    name: undefined,
    textarea: undefined,
    file: undefined,
})
const validate = (state: any): FormError[] => {
    const errors = []
    if (!state.email) errors.push({ path: 'email', message: 'Required' })
    if (!state.password) errors.push({ path: 'password', message: 'Required' })
    return errors
}
async function onSubmit(event: FormSubmitEvent<any>) {
    // Do something with data
    console.log(event.data)
}
</script>

<style scoped>
.decks {
    margin: 0;
    padding: 0;

    li {
        list-style: none;
        margin-bottom: 1rem;

        &:last-child {
            margin-bottom: 0;
        }
    }

    .deck-card {
        display: flex;
        flex-direction: row;
        height: 250px;

        img {
            width: 250px;
            height: auto;
        }

        .card-body {
            color: black;
        }
    }
}
</style>