require('./bootstrap');

import httpPlugin from 'plugins/http';
import VueRouter from 'vue-router';
import store from './store.js';
import 'vue-multiselect/dist/vue-multiselect.min.css';

import router from './router'

window.$ = window.jquery = require('jquery');
window.Vue = require('vue');
window.swal = require('sweetalert2');
window.toastr = require('toastr/build/toastr.min.js');
window.marked = require('marked');

window.toastr.options = {
    positionClass: "toast-bottom-right",
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut"
};

Vue.use(httpPlugin);
Vue.use(VueRouter);

new Vue({
    store,
    router
}).$mount('#app');