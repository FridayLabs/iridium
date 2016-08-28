import {
    SERVICES_FETCHED,
    SERVICE_CONNECTED,
    SERVICE_DISCONNECTED,
} from '../mutation-types';

const state = {
    services: {},
    all() {
        return this.services;
    }
};

const mutations = {
    [SERVICES_FETCHED] (state, services) {
        state.services = services;
    },
    [SERVICE_CONNECTED] (state, service) {
        state.services[service].isConnected = true;
        state.services[service].isLoading = false;
    },
    [SERVICE_DISCONNECTED] (state, service) {
        state.services[service].isConnected = false;
        state.services[service].isLoading = false;
    }
};

export const fetch = ({dispatch}) => {
    return window.Vue.http.get('/api/services').then(res => {
        dispatch(SERVICES_FETCHED, res.json());
    });
};

export const connect = ({dispatch}, service, cb, ecb) => {
    cb();
    return window.Vue.http.get('/api/services/connect/' + service).then(res => {
        dispatch(SERVICE_CONNECTED, service);
        ecb();
    });
};

export const disconnect = ({dispatch}, service, cb, ecb) => {
    cb();
    return window.Vue.http.get('/api/services/disconnect/' + service).then(res => {
        dispatch(SERVICE_DISCONNECTED, service);
        ecb();
    });
};

export default {
    state,
    mutations
}