import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import Nav from './globals/nav'
import Footer from './globals/footer'
import PostExcerpt from './posts/post-excerpt'
import {routes} from './routes'

Vue.use(VueRouter);

var router = new VueRouter({
  routes: routes,
  mode: 'history',
  base: '/spa/'
});

Vue.component('app-main-nav',Nav);
Vue.component('app-main-footer',Footer);
Vue.component('app-post-excerpt',PostExcerpt);

new Vue({
  el: '#app',
  router: router,
  render: h => h(App),

})
