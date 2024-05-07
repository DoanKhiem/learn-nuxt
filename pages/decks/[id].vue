<template>
  <section class="mt-5 ">
    <div class="container text-center">
      <h3>Deck #{{ id }}: Learn Englist By Sky Albert</h3>
      <div class="tools">
        <button class="btn btn-primary me-2">Start now</button>
        <button class="btn btn-primary">Create a card</button>
      </div>
      <hr class="my-5">
      <div class="row cards">
        <div class="col-3">
          <div class="card">
            <div class="front-card">
              <img src="https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg" alt="Thumbnail card">
            </div>
            <div class="back-card">
              <h6>Shop</h6>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="front-card">
              <img src="https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg" alt="Thumbnail card">
            </div>
            <div class="back-card">
              <h6>Shop</h6>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="front-card">
              <img src="https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg" alt="Thumbnail card">
            </div>
            <div class="back-card">
              <h6>Shop</h6>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="front-card">
              <img src="https://genk.mediacdn.vn/zoom/700_438/2018/10/19/photo1539926992972-15399269929721994052665.jpg" alt="Thumbnail card">
            </div>
            <div class="back-card">
              <h6>Shop</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
const { id } = useRoute().params;
// definePageMeta({
//   validate: async ({ params }) => {
//     // Check if the id is made up of digits
//     return typeof params.id === 'string' && /^\d+$/.test(params.id)
//   }
// })
</script>

<style scoped>
img {
  width: 80%;
}
</style>