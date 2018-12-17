/**
 * Import Vue and Vuex
 */
import Vue from 'vue';
import Vuex from 'vuex';

/**
 * Initializes Vuex on Vue.
 */
Vue.use(Vuex);

import sidebar from './model/sidebar.js';

export default new Vuex.Store({
    modules: {
        sidebar
    }
});