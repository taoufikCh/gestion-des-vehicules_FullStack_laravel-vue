import { createRouter,createWebHashHistory, createWebHistory } from 'vue-router'
import AllVehicule from "./components/Vehicule/AllVehicule.vue";
import AddVehicule from "./components/Vehicule/AddVehicule.vue";
import EditVehicule from "./components/Vehicule/EditVehicule.vue";
const routes = [
    {
        path: '/',
        name: '',
        component: AllVehicule
    },
    {
        path: '/vehicules/liste',
        name: 'vehicules',
        component: AllVehicule
    },
    {
        path: '/addVehicule',
        name: 'addVehicule',
        component: AddVehicule
    },
    {
        path: '/editVehicule',
        name: 'editVehicule',
        component: EditVehicule
    }
];
const router = createRouter({
    //hashbang: false,
    //history: true,
    history: createWebHistory("/"),
    //history: createWebHashHistory('/'),
    routes
 })
export default router