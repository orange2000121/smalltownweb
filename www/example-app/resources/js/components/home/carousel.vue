<template>
  <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-ride="carousel"
  >
    <ol class="carousel-indicators">
      <li
        v-for="post in posts"
        v-bind:key="post.id"
        :class="{'active':post.id==0}"
        data-target="#carouselExampleIndicators"
        :data-slide-to="post.id"
      ></li>
    </ol>
    <div class="carousel-inner">
      <!-- 幻燈片內容 -->
      <carouselitem
        v-for="post in posts"
        v-bind:key="post.id"
        v-bind:post="post"
      ></carouselitem>
    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="prev"
      style="z-index: 10"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      style="z-index: 10"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
import carouselitem from "../carousel_item.vue";
export default {
  components: {
    carouselitem,
  },
  props: ["post"],
  data: function () {
    return {
      posts: [
        {
          id: 0,
          photo: "assets/home/carsoule_pic_1.jpg",
          title: "國寶工務所",
          content: ["test1"],
          togo: "",
          goSomewhere:"老屋的前生今世",
        },
        {
          id: 1,
          photo: "assets/home/carsoule_pic_2.jpg",
          title: "文化教育",
          content: ["testt2"],
          togo: "",
          goSomewhere:"",
        },
        {
          id: 2,
          photo: "assets/home/carsoule_pic_3.jpg",
          title: "停留一晚",
          content:[ "​在大多數人的印象中，鹿港是一日遊的最佳選擇，行走的路線不外乎是從天后宮走到龍山寺，到市場吃個小吃，回家前買個阿振肉包或玉珍齋結束一日的行程。"],
          togo: "",
          goSomewhere:"鹿港住宿",
        },
        {
          id: 3,
          photo: "assets/home/carsoule_pic_4.jpg",
          title: "小鎮的文化之旅",
          content: ["​喜歡紅磚老屋、喜歡歷史文化，但來到了鹿港要怎麼更了解這裡？除了坐在三輪車上聽導覽，還有什麼方法可以更了解這裡？​身為一個百年老鎮，有的是你不知道的故事，白天的鹿港人潮滿滿，而夜晚的鹿港少去了人潮，又是什麼樣的風味呢？讓我們來告訴你，那些流淌在小鎮上的故事吧！"],
          togo: "",
          goSomewhere:"小鎮新旅行",
        },
        {
          id: 4,
          photo: "assets/home/carsoule_pic_5.jpg",
          title: "鹿港飲食",
          content: ["​content"],
          togo: "",
          goSomewhere:"go somewhere",
        },
      ],
    };
  },
};
</script>