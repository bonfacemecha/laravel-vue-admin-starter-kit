import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from "axios"
import Home from '../components/HomeComponent'
import PersonalDetails from '../components/PersonalDetailsComponent'
import MyApplications from '../components/MyApplicationsComponent'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/form-registrations',
        name: 'form-registrations',
        component: PersonalDetails
    },
    {
        path: '/applications',
        name: 'applications',
        component: MyApplications
    },
]


const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history',
  })

  router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (store.getters.user) {
            next();
            return;
        }
        next("/login");
    } else {
        next();
    }
});


  export default router;