import { createRouter, createWebHistory } from "vue-router";
import AppLayout from "../components/AppLayout.vue";
import Login from "../views/Login.vue";
import Dashboard from "../views/Dashboard.vue";
import RequestPassword from "../views/RequestPasswordReset.vue";
import ResetPassword from "../views/ResetPassword.vue";
import Products from "../views/Produits/Products.vue";
import Orders from "../views/Commandes/Orders.vue";
import Users from "../views/Utilisateurs/Users.vue";
import Reports from "../views/Reports.vue";
import store from "../store";
import NotFound from "../views/NotFound.vue";

const routes = [
    {
        path: "/app",
        name: "app",
        component: AppLayout,
        meta: {
            requiresAuth: true,
        },
        children: [
            {
                path: "dashboard",
                name: "app.dashboard",
                component: Dashboard,
            },
            {
                path: "produits",
                name: "app.products",
                component: Products,
            },
            {
                path: "utilisateurs",
                name: "app.users",
                component: Users,
            },
            {
                path: "rapports",
                name: "app.reports",
                component: Reports,
            },
            {
                path: "commandes",
                name: "app.orders",
                component: Orders,
            },
        ]
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        meta: {
            requiresGuest: true,
        },
    },
    {
        path: "/request-password",
        name: "requestPassword",
        component: RequestPassword,
        meta: {
            requiresGuest: true,
        },
    },
    {
        path: "/reset-password/:token",
        name: "resetPassword",
        component: ResetPassword,
        meta: {
            requiresGuest: true,
        },
    },
    {
        path: "/:pathMatch(.*)",
        name: "notFound",
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({name: 'login'});
    } else if (to.meta.requiresGuest && store.state.user.token){
        next({name: 'app.dashboard'});
    } else {
        next();
    }
})

export default router;
