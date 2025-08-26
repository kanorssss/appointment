//these function update the state synchronously
export const mutations = {
    SET_SAVING(state, saving) {
        state.saving = saving;
    },
    SET_ERROR(state, error) {
        state.error = error;
    },

    //api mutations
    SET_API_ERROR(state, error) {
        state.apiError = error;
    },
    SET_API_ERRORS(state, errors) {
        state.apiErrors = errors;
    },

    SET_API_IS_LOADING(state, isLoading) {
        // sets api loading from vuex
        state.apiIsLoading = isLoading;
    },

    SET_API_RESPONSE(state, response) {
        // sets api response from vuex
        state.apiResponse = response;
    },
};
