import {
    USER_FETCHED,
} from '../mutation-types';

const state = {
    user: {},
};

const mutations = {
    [USER_FETCHED] (state, user) {
        state.user = user;
    }
};

export const fetch = ({dispatch}) => {
    return window.Vue.http.get('/api/user').then(res => {
        dispatch(USER_FETCHED, res.json());
    });
};

export default {
    state,
    mutations
}