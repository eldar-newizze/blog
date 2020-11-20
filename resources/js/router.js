import VueRouter from 'vue-router';
import Vue from 'vue';

import App from "./components/App";

// Auth
import Login from "./components/auth/Login";
import Register from "./components/auth/Register";


Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: App
    },
    {
        path: "/login",
        component: Login
    },
    {
        path: "/register",
        component: Register
    }
]

export default new VueRouter({
    mode: "history",
    routes
})
