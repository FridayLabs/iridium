import Vue from 'vue'
import Vuex from 'vuex'
import services from './modules/services'
import user from './modules/user'

export default new Vuex.Store({
    modules: {
        services,
        user
    }
});