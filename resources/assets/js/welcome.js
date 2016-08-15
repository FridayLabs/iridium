import Vue from 'vue'
import VueResource from 'vue-resource'
import Welcome from './components/view/welcome.vue'

Vue.use(VueResource);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('token').getAttribute('value');

let app = new Vue({
    el: '#app',
    components: {
        welcome: Welcome
    }
});

