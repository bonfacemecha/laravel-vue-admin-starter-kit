import Vue from "vue";
import Vuex from "vuex";
import router from "../router";
import axios from "axios";
Vue.use(Vuex);

const getDefaultState = () => {
    return {
        token: "",
        users: [],
        applications: [],
        user: false, // auth. user
        registration: {
            email: "",
            name: "",
            dob: "",
            phone_number: "",
            describe_yourself: "",
            gender: "male",
            parent_guardian_contact: "",
            pastor_name_contact: "",
            residency: "",
            family_info: "",
        },
    };
};
// initial state
const state = getDefaultState();

const getters = {
    getUser: (state) => state.user,
    getApplications: (state) => state.applications,
    getRegister: (state) => state.registration,
};
const actions = {
    // Users
    setUser({ commit, getters }, payload) {
        let userData = getters.getUser;
        userData = payload;
        commit("setUser", userData);
    },
    submitForm({ commit, getters,  dispatch }) {
        let registerData = getters.getRegister;
        Swal.fire({
            title: "Please Wait..",
            text: "We are saving your data, just hold on ...",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            onOpen: () => {
                Swal.showLoading();
            },
        });
        axios
            .post("/personal-details/store", registerData)
            .then((res) => {
                Toast.fire({
                    icon: "success",
                    title: "Application Saved Successfully",
                });
                dispatch('resetRegState');
                router.push({
                    name: "applications",
                });
            })
            .catch((err) => {
                console.error(err);
                Toast.fire({
                    icon: "error",
                    title: "Error Submitting Data",
                });
                // router.push({
                //     name: "form-registrations",
                // });
            });
    },
    fetchApplications({commit, getters}) {
      let allApplications = getters.getApplications;
      axios.get("/list/get-applications")
      .then(res => {
        allApplications = res.data.applications
        commit('setApplications', allApplications)
      });
     
    },
    resetRegState({ commit }) {
        commit("resetState");
    },
};
const mutations = {
    // Users
    setUser: (state, value) => (state.user = value),
    setApplications: (state, value) => (state.applications = value),
    resetState(state) {
        Object.assign(state, getDefaultState());
    },
};
export default new Vuex.Store({
    state,
    getters,
    actions,
    mutations,
});
