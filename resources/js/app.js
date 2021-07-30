require('./bootstrap');

//window.Vue = require('vue');

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'

// Componetnts
import PortfolioIndex from './components/PortfolioIndex.vue';
import PortfolioBlogs from './components/PortfolioBlogs.vue';
import PortfolioSingleBlog from './components/PortfolioSingleBlog.vue';

export const bus = new Vue();

Vue.use(VueRouter, VueAxios, axios)

// const Foo = { template: '<div>foo</div>' }
// const Bar = { template: '<div>bar</div>' }

const routes = [
  { path: '/', name: 'PortfolioIndex', component: PortfolioIndex },
  { path: '/blogs', name: 'PortfolioBlogs', component: PortfolioBlogs },
	{ path: '/blogs/:id', name: 'PortfolioSingleBlog', component: PortfolioSingleBlog },
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

const app = new Vue({
  router
}).$mount('#app')

// Vue.component('portfolio-index', require('./components/PortfolioIndex.vue').default);

// const app = new Vue({
//     el: '#app',
// });
