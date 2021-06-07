import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '@/components/Home.vue'
import Login from '@/components/Login.vue'
import Projects from '@/components/Projects.vue'

const routes = [  
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/login',
    name: 'Login',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    //component: () => import(/* webpackChunkName: "about" */ '../views/Login.vue')
    component: Login
  },
  {
    path: '/projects',
    name: 'Projects',
    component: Projects
  },
  
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
