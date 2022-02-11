import Vue from "vue";
import VueRouter from "vue-router";

//ora diciamo a Vue di usarlo

Vue.use(VueRouter);
import Home from './components/pages/Home';
import Contacts from './components/pages/Contacts';
import About from './components/pages/About';
import Posts from './components/pages/Posts';

const router = new VueRouter({
  mode: 'history',
  linkExactActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/contacts',
      name: 'contacts',
      component: Contacts,
    },
    {
      path: '/about',
      name: 'about',
      component: About,
    },
    {
      path: '/posts',
      name: 'posts',
      component: Posts,
    },
  ]
})

export default router;