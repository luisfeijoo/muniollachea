require('./bootstrap');
window.Vue = require('vue');
import Navbar from '@vizuaalog/bulmajs/src/plugins/navbar';

Vue.component('mesa-partes', require('./components/MesaPartes.vue').default);
Vue.component('carousel', require('./components/Carousel').default);

var vm = new Vue({
    el: '#app'
});

/*
* Navbar mobile
* */
document.querySelectorAll('.navbar-link').forEach(function(navbarLink){
    navbarLink.addEventListener('click', function(){
        navbarLink.nextElementSibling.classList.toggle('is-hidden-mobile');
    })
});
