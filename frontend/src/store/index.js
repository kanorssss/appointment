import { createStore } from "vuex";
import { state } from "./state.js";
import { mutations } from "./mutations.js";

// Import the action that handles storing the certificate
import { storeCertificate, storeMarriageCertificate } from "./actions.js";

const store = createStore({
    state,
    mutations,
    actions: {
        storeCertificate,
        storeMarriageCertificate,
    },
});

export default store;
