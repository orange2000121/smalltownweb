<template>
  <div
    id="doubleRoomid"
    class="carousel slide"
    data-ride="carousel"
  >
    <ol class="carousel-indicators">
      <li
        v-for="post in posts"
        v-bind:key="post.id"
        :class="{'active':post.id==0}"
        data-target="#doubleRoomid"
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
      href="#doubleRoomid"
      role="button"
      data-slide="prev"
      style="z-index: 10"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#doubleRoomid"
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
          photo: "/assets/smalleye/小艾 (17).jpg",
          title: "提供",
          content:["床位：枕頭、被子、床墊","盥洗用具：沐浴乳、洗髮乳、吹風機","公共設施：Free Wifi、飲水機、冰箱、洗衣機(付費)、晒衣場","其他服務：鹿港地圖、明信片(付費)、夜間導覽(付費)"],
          togo: "https://booking.owlting.com/d3bfc3b1-ba7a-428a-b06c-0b82dd63a04e?lang=zh_TW&start=2021-08-16&end=2021-08-17&adult=1&child=0&infant=0",
          goSomewhere:"前去訂房",
        },
        {
          id: 1,
          photo: "assets/smalleye/doubleroom.jpeg",
          title: "價格",
          content:[ "平日1200元","假日1400元","特殊假日1600元","過年期間1800元"],
          togo: "https://booking.owlting.com/d3bfc3b1-ba7a-428a-b06c-0b82dd63a04e?lang=zh_TW&start=2021-08-16&end=2021-08-17&adult=1&child=0&infant=0",
          goSomewhere:"前去訂房",
        },
        {
          id: 2,
          photo: "/assets/smalleye/小艾 (3).jpg",
          title: "注意事項",
          content:[ "Check in 時間為15:00~21:00","Check out時間為11:00","為響應環保，個人盥洗用具如毛巾、牙刷、牙膏請自行攜帶呦","我們是老屋改造，隔音較差，22:00之後請降低音量","我們沒有提供早餐，但市場有很多傳統美味小吃可以覓食"],
          togo: "https://booking.owlting.com/d3bfc3b1-ba7a-428a-b06c-0b82dd63a04e?lang=zh_TW&start=2021-08-16&end=2021-08-17&adult=1&child=0&infant=0",
          goSomewhere:"前去訂房",
        },
      ],
    };
  },
};
</script>