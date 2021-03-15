
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import router from './routes.js';
import VueRouter from 'vue-router';
import VueMoment from 'vue-moment';
import VueSwal from 'vue-swal';
import store from './store.js'
import Vue from 'vue';
import App from './App.vue'


import Loading from 'vue-loading-overlay';
//    Import stylesheet
import Datepicker from 'vuejs-datepicker';    
import 'vue-loading-overlay/dist/vue-loading.css';
import {mapActions,mapGetters,mapState} from 'vuex';
import VueHtmlToPaper from 'vue-html-to-paper';
import HighchartsVue from 'highcharts-vue'


window.Vue = require('vue');
window.Vue.use(VueRouter);
window.Vue.use(VueMoment);
window.Vue.use(VueSwal);
window.Vue.use(VueHtmlToPaper);
window.Vue.use(HighchartsVue)



Vue.component('vue-pagination', require('laravel-vue-pagination'));
Vue.component('loading', require('vue-loading-overlay'));
Vue.component('Datepicker', require('vuejs-datepicker'));


new Vue({
    el: '#amp',
    router,
    store,
    components:{
        App,
    }
});

