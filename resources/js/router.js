import VueRouter from 'vue-router';

import SignIn from "./views/auth/SignIn";
import SignUp from "./views/auth/SignUp";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'sign_up',
            component: SignUp,
        },
        {
            path: '/sign-in',
            name: 'sign_in',
            component: SignIn,
        },

    ],
});

export default router;
