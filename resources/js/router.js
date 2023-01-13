import Login from './pages/Login.vue';
import Dashboard from './pages/Dashboard.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'Login',
        component: Login,
    },
    {
        path: "/dashboard",
        name: 'Dashboard',
        component: Dashboard,
    },
];
const router = createRouter({
    routes,
    history: createWebHistory(),
})
export default router;