/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import  toast from 'vue-toastr';


window.Vue = require('vue');
Vue.use(toast);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('agence-component',require('./components/Admin/Agence/agenceComponent.vue').default);
Vue.component('agences-component',require('./components/FO/agenceComponent.vue').default);
Vue.component('showagence-component',require('./components/Admin/Agence/afficherAgenceComponent.vue').default);
Vue.component('user-component',require('./components/Admin/utilisateur/ajouterusComponent.vue').default);
Vue.component('voiture-component',require('./components/Admin/voiture/voitureComponent.vue').default);
Vue.component('coleur-component',require('./components/Admin/voiture/coleurComponent.vue').default);
Vue.component('type-component',require('./components/Admin/voiture/typeComponent.vue').default);
Vue.component('marque-component',require('./components/Admin/voiture/marqueComponent.vue').default);
Vue.component('notification-component',require('./components/Admin/Notification/notificationComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
const notif = new Vue({
    el: '#notif',
});
