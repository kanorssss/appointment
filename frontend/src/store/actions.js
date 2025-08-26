import axiosClient from "../axios.js";

export async function storeCertificate({ commit }, payload) {
    commit("SET_SAVING", true); // Indicate that a save operation is in progress
    commit("SET_ERROR", null); // Clear any previous errors

    try {
        let dataToSend = payload;
        const response = await axiosClient.post("/certificates", dataToSend);
        return response.data;
    } catch (error) {
        commit("SET_ERROR", error.response?.data?.message || error.message);
        throw error;
    } finally {
        commit("SET_SAVING", false);
    }
}

//store marriage certificate
export async function storeMarriageCertificate({ commit }, payload) {
    commit("SET_SAVING", true); // Indicate that a save operation is in progress
    commit("SET_ERROR", null); // Clear any previous errors

    try {
        let dataToSend = payload;
        const response = await axiosClient.post("/marriageCert", dataToSend);
        return response.data;
    } catch (error) {
        commit("SET_ERROR", error.response?.data?.message || error.message);
        throw error;
    } finally {
        commit("SET_SAVING", false);
    }
}

export async function storeDeathCertificate({ commit }, payload) {
    commit("SET_API_IS_LOADING", true);
    commit("SET_API_ERROR", null);
    commit("SET_API_ERRORS", null);

    try {
        let dataToSend = payload;
        const response = await axiosClient.post("/deathCert", dataToSend);
        commit("SET_API_RESPONSE", response.data); //set api response
    } catch (error) {
        commit("SET_API_ERROR", error.response?.data?.message || error.message);
        commit("SET_API_ERRORS", error.response?.data?.errors || null);
    } finally {
        commit("SET_API_IS_LOADING", false);
    }
}
export function resetApiResponse({ commit }) {
    commit("SET_API_RESPONSE", null); // Reset the API response in Vuex state
}

export default {
    storeCertificate,
    storeMarriageCertificate,
    storeDeathCertificate,
    resetApiResponse,
};
