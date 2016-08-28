import './bootstrap'
import VueRouter from 'vue-router';

import store from './vuex/store'
import Navigation from './components/navigation.vue';

const app = Vue.extend({
    store,
    components: {
        navigation: Navigation
    }
});

import Home from './components/view/home.vue';
import Settings from './components/view/settings.vue';

const router = new VueRouter();
router.map({
    '/': {component: Home},
    '/settings': {component: Settings},
});
router.redirect({
    '*': '/'
});

router.start(app, '#app');
