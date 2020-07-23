/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

import Loading from 'vue-loading-overlay';
    // Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';


import VueToast from 'vue-toast-notification';
// Import any of available themes
// import 'vue-toast-notification/dist/dist/theme-default.css';
// import 'vue-toast-notification/dist/dist/theme-sugar.css';

import Slick from 'vue-slick';    


Vue.use(VueRouter)


import { Form, HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component('loading', Loading);
Vue.component('slick', Slick);


// window.loading = Loading;
window.Form = Form;




const routes = [
  {path: '/home', component: require('./components/index.vue').default},
  {path: '/portfolio', component: require('./components/portfolio.vue').default}
]


const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history'
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('death-notification', require('./components/DeathNotification.vue').default);
// Vue.component('burial-permit', require('./components/BurialPermit.vue').default);

Vue.mixin({
  methods: {
    setHeader: function () {
      return { Authorization: 'Bearer ' + localStorage.getItem("token") };
    },
    removeToken: function () { 
      localStorage.removeItem("token")
      localStorage.removeItem("authenticated")
    },
    asset: function(url) {
    	return window.baseurl + url
    }
  }
})
const app = new Vue({
  router,
    el: '#app',
});

