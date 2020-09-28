require('./bootstrap');
window.Vue = require('vue');


Vue.component('mesa-partes', require('./components/MesaPartes.vue').default);

var vm = new Vue({
    el: '#app'
});



