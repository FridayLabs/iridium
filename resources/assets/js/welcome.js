import './bootstrap'

import Welcome from './components/view/welcome.vue';

let app = new Vue({
    el: '#app',
    components: {
        welcome: Welcome
    }
});