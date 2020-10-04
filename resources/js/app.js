require('./bootstrap');
window.Vue = require('vue');


Vue.component('mesa-partes', require('./components/MesaPartes.vue').default);
Vue.component('carousel', require('./components/Carousel').default);

var vm = new Vue({
    el: '#app'
});



