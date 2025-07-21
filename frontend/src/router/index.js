import { createRouter, createWebHistory } from "vue-router";
import App from "../App.vue";

import Appointment from "../views/AppointmentContent.vue";
import BirthCertificate from "../views/Certificates/BirthCertificate.vue";
import DeathCertificate from "../views/Certificates/DeathCertificate.vue";
import AppLayout from "../components/AppLayout.vue";
import MarriageCertificate from "../views/Certificates/MarriageCertificate.vue";

const routes = [
    {
        path: "/",
        component: AppLayout,
    },
    {
        path: "/appointment",
        name: "AppointmentPage",
        component: Appointment,
        children: [
            {
                path: "birth",
                name: "BirthCertificate",
                component: BirthCertificate,
            },
            {
                path: "death",
                name: "DeathCertificate",
                component: DeathCertificate,
            },
            {
                path: "marriage",
                name: "MarriageCertificate",
                component: MarriageCertificate,
            },
        ],
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
