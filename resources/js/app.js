/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'

require('./bootstrap');

window.Vue = require('vue');

//Teste De notificações
/*Registrando dispositivos com Expo e armazenando o toke de usuario*/




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./views/App.vue').default);
Vue.component('home', require('./views/Home.vue').default);
Vue.component('hello', require('./views/Hello.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home,
		},
		{
			path: '/hello',
			name: 'hello',
			component: Hello,
		},
	],
	
});
const app = new Vue({
    el: '#app',
	component: {App},
	
	router,
});


const home = new Vue({
	el: '#home',
	component: {Home},
	router,
});

const hello = new Vue({
	el: '#hello',
	component: {Hello},
	router,
	
})
