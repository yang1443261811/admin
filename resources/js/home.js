window.$ = window.jQuery = require('jquery');
window.Vue = require('vue');
window.toastr = require('toastr/build/toastr.min.js');
window.marked = require('marked');
window.hljs = require('vendor/highlight.min.js');

import httpPlugin from 'plugins/http';

require('./bootstrap');

Vue.use(httpPlugin);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('comment', require('./components/comment.vue'));
Vue.component('avatar', require('./components/AvatarUpload.vue'));
Vue.component('parse', require('./components/Parse.vue'));

new Vue({}).$mount('#app');