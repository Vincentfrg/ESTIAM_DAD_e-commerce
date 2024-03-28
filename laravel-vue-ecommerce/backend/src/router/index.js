import { createRouter, createWebHistory } from "vue-router";
import AppLayout from "../components/AppLayout.vue";
import Login from "../views/Login.vue";
import Dashboard from "../views/Dashboard.vue";
import RequestPassword from "../views/RequestPasswordReset.vue";
import ResetPassword from "../views/ResetPassword.vue";
import Produits from "../views/Produits.vue";
import Utilisateurs from "../views/Utilisateurs.vue";
import Rapports from "../views/Rapports.vue";

const routes = [
    {
        path: "/app",
        name: "app",
        component: AppLayout,
        children: [
            {
                path: "dashboard",
                name: "app.dashboard",
                component: Dashboard,
            },
            {
                path: "produits",
                name: "app.produits",
                component: Produits,
            },
            {
                path: "utilisateurs",
                name: "app.utilisateurs",
                component: Utilisateurs,
            },
            {
                path: "rapports",
                name: "app.rapports",
                component: Rapports,
            },
        ]
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/request-password",
        name: "requestPassword",
        component: RequestPassword,
    },
    {
        path: "/reset-password/:token",
        name: "resetPassword",
        component: ResetPassword,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
