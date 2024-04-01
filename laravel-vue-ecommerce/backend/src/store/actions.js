import axiosClient from "../axios";

export function getUser({ commit }, data) {
    return axiosClient.get("/user", data)
    .then(({ data }) => {
        commit("setUser", data);
        return data;
    });
}

export function login({ commit }, data) {
    return axiosClient.post("/login", data).then(({ data }) => {
        commit("setUser", data.user);
        commit("setToken", data.token);
        return data;
    });
}

export function logout({ commit }) {
    return axiosClient.post("/logout").then((response) => {
        commit("setToken", null);
        return response;
    });
}

export function getProducts({commit}, {url = null, search = '', perPage = 10}) {
    commit('setProducts', [true])
    url = url || '/product';
    return axiosClient.get(url, {
        params: {search, per_page: perPage}
    })
        .then(res => {
            commit('setProducts', [false, res.data])
        })
        .catch(() => {
            commit('setProducts', [false])
        })
}
