
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import ClassList from './components/ClassListComponent.vue';
import TeachersListComponent from './components/TeachersListComponent.vue';
import ClassesCreate from './components/ClassCreateComponent.vue';

const routes = [
    {
        path: '/',
        components: {
            classList: ClassList
        }
    },
    {
        path: '/',
        components: {
            teachersListComponent: TeachersListComponent
        }
    },
    {path: '/classes/create', component: ClassesCreate, name: 'createClass'},
    // {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')