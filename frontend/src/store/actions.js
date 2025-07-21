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

export default {
    storeCertificate,
};
