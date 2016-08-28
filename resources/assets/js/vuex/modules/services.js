import {RECEIVE_SERVICES} from '../mutation-types';

const state = {
    all: {},
};

const mutations = {
    [RECEIVE_SERVICES] (state, services) {
        state.all = services;
    }
};

export default {
    state,
    mutations
}