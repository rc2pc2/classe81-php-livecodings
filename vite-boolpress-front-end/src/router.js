import { createRouter, createWebHistory } from 'vue-router';

import HomePage from './pages/HomePage.vue';
import ContactUs from './pages/ContactUs.vue';
import PostsList from './pages/PostsList.vue';
import SinglePost from './pages/SinglePost.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/contact-us',
            name: 'contact-us',
            component: ContactUs
        },
        {
            path: '/posts',
            name: 'posts',
            component: PostsList
        },
        {
            path: '/posts/:slug',
            name: 'post',
            component: SinglePost
        },
    ]
});

export { router };