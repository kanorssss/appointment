import { createStore } from "vuex";
import { state } from "./state.js";
import { mutations } from "./mutations.js";

// Import the action that handles storing the certificate
import { storeCertificate } from "./actions.js";

const store = createStore({
    state,
    mutations,
    actions: {
        storeCertificate,
    },
});

export default store;
