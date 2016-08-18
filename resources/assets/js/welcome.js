require('./bootstrap');

let app = new Vue({
    el: '#app',
    components: {
        welcome: require('./components/view/welcome.vue')
    }
});