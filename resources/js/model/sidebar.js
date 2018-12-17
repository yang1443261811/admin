export default {
    state: {
        sidebar: {
            opened: false
        }
    },

    actions:{
        toggle({commit}){
            commit('sidebarToggle')
        }
    },

    mutations:{
        sidebarToggle(state){
            state.sidebar.opened = !state.sidebar.opened;
        }
    },

    getters:{
        getSidebarStatus(state){
            return state.sidebar.opened;
        }
    }
}