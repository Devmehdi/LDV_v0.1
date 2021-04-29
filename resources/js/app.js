require('./bootstrap');

import Vue from 'vue';
import  toast from 'vue-toastr';


window.Vue = require('vue');
Vue.use(toast);



Vue.component('agence-component',require('./components/Admin/Agence/agenceComponent.vue').default);
Vue.component('agences-component',require('./components/FO/agenceComponent.vue').default);
Vue.component('showagence-component',require('./components/Admin/Agence/afficherAgenceComponent.vue').default);
Vue.component('user-component',require('./components/Admin/utilisateur/ajouterusComponent.vue').default);
Vue.component('voiture-component',require('./components/Admin/voiture/voitureComponent.vue').default);

const app = new Vue({
    el: '#app'
});
