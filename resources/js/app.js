/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('technicians', require('./components/technicians/Technicians.vue').default);
Vue.component('TechnicianForm', require('./components/technicians/TechnicianForm.vue').default);
Vue.component('TechnicianProfile', require('./components/technicians/Profile.vue').default);
Vue.component('TechniciansMap', require('./components/technicians/TechniciansMap.vue').default);
Vue.component('MapSearch', require('./components/technicians/MapSearch.vue').default);
Vue.component('PostWork', require('./components/work/PostWork.vue').default);
Vue.component('Home', require('./components/Home.vue').default);
Vue.component('Register', require('./components/Register.vue').default);
Vue.component('Login', require('./components/Login.vue').default);

import axios from 'axios'
Vue.use(axios)

const app = new Vue({
    el: '#app',
});
