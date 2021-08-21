<template>
  <div>
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div
        class="row text-center"
        style="margin-top: 50px; margin-bottom: 50px"
      >
        <div
          v-for="post in posts"
          v-bind:key="post.id"
          v-bind:post="post"
          class="col-lg-4"
        >
          <div class="circular--portrait">
            <img :src="post.photo" />
          </div>
          <h2>{{ post.title }}</h2>
          <p>{{ post.content }}</p>
          <p>
            <a class="btn btn-secondary" :href="post.togo" role="button"
              >前往購物</a
            >
          </p>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>
</template>

<script setup lang="ts">
export default {
  props: ["posts"],
};
</script>
<style scoped>
.circular--portrait {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  width: 140px;
  height: 140px;
  overflow: hidden;
  border-radius: 50%;
}

.circular--portrait img {
  width: 140px;
  height: auto;
}
</style>