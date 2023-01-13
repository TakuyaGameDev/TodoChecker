
import { createStore } from "vuex";

// Storeを生成
export default createStore({
    state:{
        user:{
            email:'',
            password:'',
            name:'',
            team_name:'',
            teams:[],
        },
    },
    mutations:{
        setUser (state,payload) {
            state.user.email = payload.email;
            state.user.password = payload.password;
            state.user.name = payload.user_name;
            state.user.team_name = payload.team_name;
            state.user.teams = payload.teams;
        },
    },
    actions:{
        login ({ commit }, state) {
            commit("setUser", state)
        }
    },
    getters:{
        user: (state) => {
            return state.user;
        },
    },
})


// const store = new Vuex.Store({
//     state,
//     mutations,
//     actions,
//     getters:{
//         user: () => () => {
//             return state.user;
//         },
//     },
// });
// export default store;