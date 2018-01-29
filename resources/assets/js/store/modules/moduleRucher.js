import axios from "axios";
import Cookies from "js-cookie";
import * as types from "../mutation-types";

// state
export const state = {
  ruchers: null,
  rucher:null
};

// getters
export const getters = {
  ruchers: state => state.ruchers,
  rucher: state => state.rucher

};

// mutations
export const mutations = {

  [types.FETCH_RUCHERS](state, { ruchers }) {
    state.ruchers = ruchers;
  },
  [types.FETCH_RUCHER](state, { rucher }) {
    state.rucher = rucher;
  },
  [types.CLEAN_RUCHER](state) {
    state.rucher = null;
    state.ruchers = null;
  },

};

// actions
export const actions = {

  async listRuchers({ commit, dispatch }, payload) {

    try {
        const { data } = await axios.get("/api/ruchers");
        console.log("ruchers:", data)
        commit(types.FETCH_RUCHERS, { ruchers: data });
      } catch (e) {
        console.log("echec de la recuperation des ruchers",e)
      }

  },
  async showRucher({ commit, dispatch }, idRucher) {

    try {
        const { data } = await axios.get("/api/ruchers/"+idRucher);
        console.log("ruchers:", data)
        commit(types.FETCH_RUCHER, { rucher: data });
      } catch (e) {
        console.log("echec de la recuperation du rucher",e)
      }

  },

  async createRucher({ commit, dispatch }, rucher) {

    try {
        const { data } = await axios.post("/api/ruchers", rucher);
        console.log("create resp:", data)
      //  commit(types.FETCH_RUCHERS, { ruchers: data });
      } catch (e) {
        console.log("echec de la recuperation du rucher",e)
      }

  },

  async updateRucher({ commit, dispatch }, rucher) {

    try {
        const { data } = await axios.put("/api/ruchers/"+rucher.id, rucher);
        console.log("create resp:", data)
        commit(types.FETCH_RUCHERS, { rucher: data });
      } catch (e) {
        console.log("echec de la recuperation du rucher",e)
      }

  },


  async deleteRucher({ commit, dispatch }, rucher) {

    try {
        const { data } = await axios.delete("/api/ruchers/"+rucher.id);
        console.log("create resp:", data)
        commit(types.FETCH_RUCHERS, { ruchers: data });
      } catch (e) {
        console.log("echec de la recuperation du rucher",e)
      }

  },
  
  async cleanRucher({ commit, dispatch }) {
        commit(types.CLEAN_RUCHER);
  }
};
