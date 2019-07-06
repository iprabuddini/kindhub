// app.js

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import ClassList from './components/ClassListComponent.vue';
import TeachersListComponent from './components/TeachersListComponent.vue';
import ClassesCreate from './components/ClassCreateComponent.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: ClassList
  },
  {
      name: 'create',
      path: '/create',
      component: ClassesCreate
  },
  {path: '/classes/create', component: ClassesCreate, name: 'createClass'},
  
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');