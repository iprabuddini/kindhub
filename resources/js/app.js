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
import TeachersList from './components/TeachersListComponent.vue';
import ClassesCreate from './components/ClassCreateComponent.vue';
import TeachersCreate from './components/TeacherCreateComponent.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: ClassList
  },
  {
      name: 'teacher',
      path: '/teacher',
      component: TeachersList
  },
  {path: '/class/create', component: ClassesCreate, name: 'createClass'},
  {path: '/teacher/create', component: TeachersCreate, name: 'createTeacher'},
  
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');