window.Vue = require('vue').default;
// 註冊 Vue 組件

Vue.component('navbar', require('./components/Navbar.vue').default)
Vue.component('demo', require('./components/demo.vue').default)
Vue.component('pagevideo', require('./components/home/pageVideo.vue').default)
Vue.component('carousel', require('./components/home/carousel.vue').default)
Vue.component('footertemplate', require('./components/footer.vue').default)

// 初始化 Vue
const app = new Vue({
    el: '#app',
});
const smalleye = new Vue({
    el: '#smalleye',
    components: {
        'smalleyecarousel': require('./components/smalleye/goodsCarousel.vue').default,
        'smalleyecover': require('./components/smalleye/smalleye_cover.vue').default,
        'girlsprivateroom': require('./components/smalleye/girls_private_room.vue').default,
        'doubleroom': require('./components/smalleye/double_room.vue').default,
    }
});
const osmanthusalley = new Vue({
    el: '#osmanthusalley',
    components: {
        'osmanthusalleyindex': require('./components/osmanthusAlley/osmanthusAlleyIndex.vue').default,
    }
});