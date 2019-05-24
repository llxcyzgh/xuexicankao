import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import NotFound from './views/NotFound'
import Hello from './views/Hello'
import Home from './views/Home'
import UsersIndex from './views/UsersIndex'
import UsersEdit from './views/UsersEdit'
import UsersTest from './views/UsersTest'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        {
            path: '/users/:id/edit',
            name: 'users.edit',
            component: UsersEdit,
        },
        {
            path: '/404',
            name: '404',
            component: NotFound,
        },
        {
            path: '*',
            redirect: '/404',
        },

        {
            path: '/users/test',
            name: 'users.test',
            component: UsersTest,
        },
    ],
})

const app = new Vue({
    el: '#app',
    components: {App},
    router,
})

