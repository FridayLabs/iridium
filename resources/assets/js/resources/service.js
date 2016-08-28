export default {
    fetch(cb) {
        return window.Vue.http.get('/api/services').then(res => {
            cb(res.json());
        });
    }
};