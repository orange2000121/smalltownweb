<template>
  <div>
    <pagecover v-bind:post="pagecoverdata"></pagecover>
    <promotion v-bind:posts="promotiondata"></promotion>
    <productshowcase v-bind:posts="goodsdata"></productshowcase>
  </div>
</template>

<script>
import productshowcase from "./productshowcase.vue";
import pagecover from "../pagecover.vue";
import promotion from "../promotion_carousel.vue";
import demo from "../demo.vue";

export default {
  components: {
    productshowcase,
    pagecover,
    promotion,
    demo,
  },
  data: function () {
    return {
      pagecoverdata: {
        photo: "assets/osmanthusAlley/cover.jfif",
        title: "桂花巷人文茶館",
        content: "",
      },
      goodsdata: [
        {
          photo: "assets/osmanthusAlley/SourPlumSoup.jfif",
          title: "桂花酸梅湯",
          content: "古法中藥熬煮24小時",
          togo: "https://shopee.tw/%E3%80%90%E9%B9%BF%E6%B8%AF%E6%A1%82%E8%8A%B1%E5%B7%B7%E4%BA%BA%E6%96%87%E8%8C%B6%E9%A4%A8%E3%80%91-%E6%A1%82%E8%8A%B1%E9%85%B8%E6%A2%85%E6%B9%AF1000cc-%E5%8E%9F%E6%B1%81-%E6%BF%83%E7%B8%AE-%E5%85%A9%E7%A8%AE%E9%81%B8%E6%93%87-%E9%85%B8%E7%94%9C%E6%BB%8B%E5%91%B3-%E5%A4%8F%E5%A4%A9%E6%B6%88%E6%9A%91%E6%AD%A2%E6%B8%B4%E5%BF%85%E5%96%9D%E9%A3%B2%E5%93%81-i.41425979.2683833176?position=1",
        },
        {
          photo: "assets/osmanthusAlley/Teasauce.jfif",
          title: "桂花酸梅湯",
          content: "古法中藥熬煮24小時",
          togo: "https://shopee.tw/%E3%80%90%E9%B9%BF%E6%B8%AF%E6%A1%82%E8%8A%B1%E8%8C%B6%E5%B7%B7%E4%BA%BA%E6%96%87%E8%8C%B6%E9%A4%A8%E3%80%91-%E6%A1%82%E8%8A%B1%E8%8C%B6%E9%86%AC-(%E5%8F%AF%E6%90%AD%E9%85%8D%E8%8C%B6%E9%A1%9E%E3%80%81%E5%92%96%E5%95%A1%E3%80%81%E7%89%9B%E5%A5%B6%EF%BC%8C%E5%A2%9E%E5%8A%A0%E6%B7%A1%E6%B7%A1%E6%A1%82%E8%8A%B1%E9%A6%99%EF%BC%8C%E6%98%AF%E4%B8%8B%E5%8D%88%E8%8C%B6%E7%9A%84%E5%A5%BD%E9%81%B8%E6%93%87)-i.41425979.995838378?position=2",
        },
        {
          photo: "assets/osmanthusAlley/梅餅.jfif",
          title: "桂花酸梅湯",
          content: "古法中藥熬煮24小時",
          togo: "https://shopee.tw/%E3%80%90%E9%B9%BF%E6%B8%AF%E6%A1%82%E8%8A%B1%E5%B7%B7%E4%BA%BA%E6%96%87%E8%8C%B6%E9%A4%A8-%E3%80%91%E6%A1%82%E8%8A%B1%E6%A2%85%E9%A4%85-%E5%82%B3%E7%B5%B1%E5%8F%A4%E6%97%A9%E5%91%B3-%E5%85%92%E6%99%82%E8%A8%98%E6%86%B6%E7%9A%84%E6%A1%82%E8%8A%B1%E6%A2%85%E9%A6%99-i.41425979.775778893?position=0",
        },
        {
          photo: "assets/osmanthusAlley/蛋捲.jfif",
          title: "桂花酸梅湯",
          content: "古法中藥熬煮24小時",
          togo: "https://shopee.tw/%E3%80%90%E9%B9%BF%E6%B8%AF%E6%A1%82%E8%8A%B1%E5%B7%B7%E4%BA%BA%E6%96%87%E8%8C%B6%E9%A4%A8%E3%80%91%E8%80%81%E5%B1%8B%E8%9B%8B%E6%8D%B2%E7%A6%AE%E7%9B%92-%E5%8D%81%E5%A4%A7%E5%90%8D%E7%94%A2%E4%BC%B4%E6%89%8B%E7%A6%AE-%E9%B9%BF%E6%B8%AF%E8%80%81%E8%A1%97%E6%89%8B%E5%B7%A5%E8%9B%8B%E6%8D%B2-i.41425979.4332114617?position=3",
        },
      ],
      promotiondata: {
        targetid: "osmanthusAllyPromision",
        contents: [
          {
            id: 0,
            img: "/assets/osmanthusAlley/106574373_3096918607062548_5700600503846849459_n (1).jpg",
          },
          {
            id: 1,
            img: "/assets/smalleye/103399680_1354166191440741_4369305992631042337_n.jpg",
          },
        ],
      },
    };
  },
};
</script>


<style scoped>
</style>