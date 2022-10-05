/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import router from './router'
import store from './store'

import axios from "axios";
window.Vue = require('vue').default;
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue' 

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import { Bar } from 'vue-chartjs/legacy'
import Swal from 'sweetalert2'

//Moment js
import moment from 'moment'
window.moment = moment;

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

//Sweet alert
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Toast = Toast;



Vue.component('App', require('./App.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router
});
