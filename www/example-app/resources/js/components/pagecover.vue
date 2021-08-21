<template>
  <header>
    <div class="overlay"></div>
    {{post.photo}}
    {{post.title}}
    {{post.content}}
    <img :src="post.photo" />
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">{{ post.title }}</h1>
          <p class="lead mb-0">{{ post.content }}</p>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default {
  props: ["post", "photo", "title", "content"],
};
</script>

<style scoped>
header {
  position: relative;
  background-color: black;
  height: 60vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header img {
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

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

</style>