import {
    SERVICES_FETCHED,
    SERVICE_CONNECTED,
    SERVICE_DISCONNECTED,
} from '../mutation-types';

const state = {
    services: {},
    asyncLoading: false
};

const mutations = {
    [SERVICES_FETCHED] (state, services) {
        state.services = services;
    },
    [SERVICE_CONNECTED] (state, service) {
        state.services[service].isConnected = true;
    },
    [SERVICE_DISCONNECTED] (state, service) {
        state.services[service].isConnected = false;
    }
};

export const fetch = ({dispatch}) => {
    return window.Vue.http.get('/api/services').then(res => {
        dispatch(SERVICES_FETCHED, res.json());
    });
};

export const connect = ({dispatch}, service) => {
    state.asyncLoading = true;
    return window.Vue.http.get('/api/services/connect/' + service).then(res => {
        dispatch(SERVICE_CONNECTED, service);
        state.asyncLoading = false;
    });
};

export const disconnect = ({dispatch}, service) => {
    state.asyncLoading = true;
    return window.Vue.http.get('/api/services/disconnect/' + service).then(res => {
        dispatch(SERVICE_DISCONNECTED, service);
        state.asyncLoading = false;
    });
};

export default {
    state,
    mutations
}