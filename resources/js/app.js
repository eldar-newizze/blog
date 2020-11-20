/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./src/jquery-2.2.3.min')
//require('./src/jquery.desoslide')
//require('./src/jquery.flexisel')
//require('./src/move-top')
//require('./src/easing')
//require('./src/bootstrap')
//require('./src/modernizr.custom.min')


require('./bootstrap')

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
window.Vue = require('vue');
Vue.component('view-header', require('./components/HeaderComponent').default)
Vue.component('spinner', require('vue-simple-spinner'))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from "./router"
const app = new Vue({
    el: '#app',
    router
})
