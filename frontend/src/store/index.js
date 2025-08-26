import { createStore } from "vuex";
import { state } from "./state.js";
import { mutations } from "./mutations.js";

// Import the action that handles storing the certificate
import {
    storeCertificate,
    storeMarriageCertificate,
    storeDeathCertificate,
    resetApiResponse,
} from "./actions.js";

const getters = {
    apiError: (state) => state.apiError,
    apiIsLoading: (state) => state.apiIsLoading,
    apiResponse: (state) => state.apiResponse,
    apiErrors: (state) => state.apiErrors,
};

const store = createStore({
    state,
    getters,
    mutations,
    actions: {
        storeCertificate,
        storeMarriageCertificate,
        storeDeathCertificate,
        resetApiResponse,
    },
});

export default store;
