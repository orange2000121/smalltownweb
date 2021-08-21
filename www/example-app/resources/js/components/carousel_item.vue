/* ------------------------------- 只有單張照片的輪播圖 ------------------------------- */
<template>
  <div :class="{ active: post.id == 0 }" class="carousel-item">
    <div class="overlay"></div>
    <img
      :src="post.photo"
      class="background"
      alt="..."
      style="filter: blur(5px)"
    />
    <div class="container row h-100 mx-auto">
      <img
        :src="post.photo"
        class="col-sm-7 ml-sm-5 my-auto"
        alt="..."
        style="min-width: 300px; max-height: 65vh"
      />

      <div
        class="card text-white text-center col-sm mr-sm-5 my-auto"
        style="min-width: 300px; background-color: #b86b46"
      >
        <div class="card-body">
          <h5 class="card-title">
            <u>{{ post.title }}</u>
          </h5>
          <p></p>
          <ul class="card-text text-left">
            <li v-for="(content, index) in post.content" v-bind:key="index">
              {{ content }}
            </li>
          </ul>
          <p></p>
          <a :href="post.togo" class="btn btn-primary">{{
            post.goSomewhere
          }}</a>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.carousel .carousel-item {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}
.carousel .carousel-item .background {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
.carousel .carousel-item .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}
.carousel .carousel-item .container {
  position: relative;
  top: auto;
  z-index: 2;
}
</style>
<script>
export default {
  props: ["post", "photo", "title", "content", "togo"],
};
</script>