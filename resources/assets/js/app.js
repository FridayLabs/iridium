require('./bootstrap');

let VueRouter = require('vue-router');

const app = Vue.extend({
    components: {
        // navigation: require('./components/navigation.vue')
    }
});

const router = new VueRouter();
router.map({
    '/': {component: require('./components/view/home.vue')},
    '/settings': {component: require('./components/view/settings.vue')},
});
router.redirect({
    '*': '/'
});

router.start(app, '#app');
