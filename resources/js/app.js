require('./bootstrap');

require('alpinejs');

import Vue from 'vue';

Vue.component('example-component', require('./components/VueComponent.vue').default);

const app = new Vue({
    el: '#app',
});

require('./glider');
require('./carousel');
