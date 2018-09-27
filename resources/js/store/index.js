import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    user: {
      name: 'Demo User'
    }
  },

  mutations: {
    setUser (state, user) {
      state.user = user
    }
  }
})

export default store