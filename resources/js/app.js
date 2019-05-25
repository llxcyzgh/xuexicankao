import Vue from 'vue';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue';
import '../sass/custom.scss'

import App from "./views/App";
import router from './router';

Vue.use(VueRouter);
Vue.use(BootstrapVue);


const app = new Vue({
    el: '#app',
    components: {App},
    router,
});
