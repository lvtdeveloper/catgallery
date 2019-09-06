require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'; 

Vue.use(VueRouter);

const routes = [
  { path: '/', component: require('./components/WelcomeComponent.vue').default },
  { path: '/kitten1', component: require('./components/KittenOne.vue').default },
  { path: '/kitten2', component: require('./components/KittenTwo.vue').default },
  { path: '/kitten3', component: require('./components/KittenThree.vue').default }
]

const router = new VueRouter({
    routes: routes,
    mode: "history"
})
  
const app = new Vue({
    router
}).$mount('#app')






