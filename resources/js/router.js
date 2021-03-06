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
                    component: Vue.component('home', require('dashboard/pages/home/Home.vue'))
                },
                {
                    path: 'users',
                    name: 'users',
                    component: Vue.component('users', require('dashboard/pages/user/User.vue'))
                },
                {
                    path: 'user/edit/:id',
                    name: 'user.edit',
                    component: Vue.component('users', require('dashboard/pages/user/Edit.vue'))
                },
                {
                    path: 'user/create',
                    name: 'user.create',
                    component: Vue.component('users', require('dashboard/pages/user/Create.vue'))
                },
                {
                    path: 'articles',
                    name: 'articles',
                    component: Vue.component('articles', require('dashboard/pages/article/Article.vue'))
                },
                {
                    path: 'article/create',
                    name: 'article.create',
                    component: Vue.component('articles', require('dashboard/pages/article/Create.vue'))
                },
                {
                    path: 'article/edit/:id',
                    name: 'article.edit',
                    component: Vue.component('articles', require('dashboard/pages/article/Edit.vue'))
                },
                {
                    path: 'discussions',
                    name: 'discussions',
                    component: Vue.component('discussions', require('dashboard/pages/discussion/Discussion.vue'))
                },
                {
                    path: 'discussion/create',
                    name: 'discussion.create',
                    component: Vue.component('discussions', require('dashboard/pages/discussion/Create.vue'))
                },
                {
                    path: 'discussion/edit/:id',
                    name: 'discussion.edit',
                    component: Vue.component('discussions', require('dashboard/pages/discussion/Edit.vue'))
                },
                {
                    path: 'comments',
                    name: 'comments',
                    component: Vue.component('comments', require('dashboard/pages/comment/Comment.vue'))
                },
                {
                    path: 'comment/edit/:id',
                    name: 'comment.edit',
                    component: Vue.component('comments', require('dashboard/pages/comment/Edit.vue'))
                }
            ],
            mode: 'history',

        }
    ]
});