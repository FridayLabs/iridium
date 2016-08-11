import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

import Navigation from './components/navigation.vue'
import Home from './components/view/home.vue'
import Settings from './components/view/settings.vue'

Vue.use(VueRouter);
Vue.use(VueResource);

let app = Vue.extend({
    components: {
        navigation: Navigation
    }
});

const router = new VueRouter();
router.map({
    '/': {component: Home},
    '/settings': {component: Settings},
});
router.redirect({
    '*': '/'
});

router.start(app, '#app');

