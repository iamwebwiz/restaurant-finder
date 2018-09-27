import Vue from 'vue'
import VueRouter from 'vue-router'

import RestaurantOwner from '../views/Home/RestaurantOwner.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  routes: [
    {
      path: '/',
      component: RestaurantOwner
    }
  ]
})

export default router