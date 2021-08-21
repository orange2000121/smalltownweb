<template>
  <div :id="targetid" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li
        v-for="data in contents"
        v-bind:key="data.id"
        :data-target="target"
        :data-slide-to="data.id"
        :class="{ active: data.id == 0 }"
      ></li>
    </ol>
    <div class="carousel-inner">
      <div
        v-for="data in contents"
        v-bind:key="data.id"
        class="carousel-item"
        :class="{ active: data.id == 0 }"
      >
        <img class="d-block" :src="data.img" alt="..." />
      </div>
    </div>
    <a
      class="carousel-control-prev"
      :href="target"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      :href="target"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</template>

<script>
export default {
  props: ["posts"],
  data: function () {
    return {
      targetid: this.posts.targetid,
      target: "#" + this.posts.targetid,
      contents: this.posts.contents,
    };
  },
};
</script>
<style scoped>
.carousel .carousel-inner .carousel-item{
      background-color: black;
}
.carousel .carousel-inner .carousel-item img {
  height: 500px;
  object-fit: cover;
  margin: auto;
}
</style>