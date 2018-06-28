/**
 * Created by Favour Afolayan on 6/28/2018.
 */

import VueRouter from 'vue-router';

let routes = [
    {
        path:'/', component: require('./components/Home.vue')
    },
    {
        path:'/setup', component: require('./components/Settings.vue')
    }
];

export default new VueRouter({
  routes,
  mode: 'history'
})