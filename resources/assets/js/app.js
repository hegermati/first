require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';
Vue.use(Buefy);
var app = new Vue({
    el: '#app',
    data: {}
});

/*$(document).ready(function (e) {
    $('.dropdown button').hover(function (e) {
        $(this).parent().parent().toggleClass('is-active');
    });
})
*/
//Vue.component('example-component', require('./components/ExampleComponent.vue'));