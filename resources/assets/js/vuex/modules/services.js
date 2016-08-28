import {RECEIVE_SERVICES} from '../mutation-types';

const state = {
    services: {},
    all() {
        return this.services;
    }
};

const mutations = {
    [RECEIVE_SERVICES] (state, services) {
        state.services = services;
    }
};

export const fetch = ({dispatch}) => {
    return window.Vue.http.get('/api/services').then(res => {
        dispatch(RECEIVE_SERVICES, res.json())
    });
};

export default {
    state,
    mutations
}