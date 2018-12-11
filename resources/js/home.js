window.$ = window.jQuery = require('jquery');
window.Vue = require('vue');

import httpPlugin from 'plugins/http';

require('./bootstrap');

Vue.use(httpPlugin);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('comment', require('./components/comment.vue'));

new Vue({}).$mount('#app');