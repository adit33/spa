import VueRouter from 'vue-router';

const Employee =require('./pages/employee/create.vue')
const Home = require('./components/ExampleComponent')

const routes = [
    { path: '/home', component: Home },
    { path: '/employee', component: Employee }
  ]

const router=new VueRouter({
    routes
})

const app = new Vue({
    router
  }).$mount('#app')