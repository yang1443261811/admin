import Vue from 'vue';
import vueRouter from 'vue-router';
Vue.use(vueRouter);

export default new vueRouter({
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Vue.component('dashboard', require('dashboard/Layout.vue')),
            children: [
                {
                    path: 'home',
                    name: 'home',
                    component:Vue.component('home', require('dashboard/pages/home/Home.vue'))
                }
            ],
            linkActiveClass: 'active',
            linkExactActiveClass: 'active',
            mode: 'history',

        }
    ]
});