import axios from 'axios';

const client = axios.create({
    baseURL: '/api',
});

export default {
    all() {
        return client.get('users');
    },
    find(id) {
        return client.get(`users/${id}`);
    },
    update(id, data) {
        return client.patch(`users/${id}`, data);
    },
    delete(id) {
        return client.delete(`users/${id}`);
    },
}
