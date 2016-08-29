import {
    SERVICES_FETCHED,
    SERVICE_CONNECTED,
    SERVICE_DISCONNECTED,
    SERVICE_LOADING,
} from '../mutation-types';

const state = {
    services: {},
    asyncLoading: {}
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
    },
    [SERVICE_LOADING] (state, service) {
        state.services[service] = Object.assign({}, state.services[service], {
            isLoading: true
        });
    }
};

export const fetch = ({dispatch}) => {
    return window.Vue.http.get('/api/services').then(res => {
        dispatch(SERVICES_FETCHED, res.json());
    });
};

export const connect = ({dispatch}, service) => {
    dispatch(SERVICE_LOADING, service);
    return window.Vue.http.get('/api/services/connect/' + service).then(res => {
        dispatch(SERVICE_CONNECTED, service);
    });
};

export const disconnect = ({dispatch}, service) => {
    dispatch(SERVICE_LOADING, service);
    return window.Vue.http.get('/api/services/disconnect/' + service).then(res => {
        dispatch(SERVICE_DISCONNECTED, service);
    });
};

export default {
    state,
    mutations
}