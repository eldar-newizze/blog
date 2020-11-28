import VueRouter from 'vue-router';
import Vue from 'vue';

import App from "./components/App";

// Auth
import Login from "./components/auth/Login";
import Register from "./components/auth/Register";
import Blog from "./components/Blog";
import ReadPost from "./components/blog/ReadPost"
import SortedPosts from "./components/SortedPosts";


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
    },
    {
        path: "/blog",
        component: Blog
    },
    {
        path: "/post:id",
        component: ReadPost
    },
    {
        path: "/filter:id",
        component: SortedPosts
    }
]

export default new VueRouter({
    mode: "history",
    routes
})
