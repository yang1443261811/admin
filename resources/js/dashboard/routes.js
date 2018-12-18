import {routes as home} from './pages/home';
export default [{
    path: '/dashboard',
    component: function () {
        require('dashboard/Layout.vue')
    },
    children: [
        ...home
    ]

}];