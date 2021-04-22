require('./bootstrap');

import Vue from 'vue';

window.Vue = require('vue');


Vue.component('agence-component',require('./components/Admin/Agence/agenceComponent.vue').default);
Vue.component('agences-component',require('./components/FO/agenceComponent.vue').default);
Vue.component('showagence-component',require('./components/Admin/Agence/afficherAgenceComponent.vue').default);

const app = new Vue({
    el: '#app'
});
