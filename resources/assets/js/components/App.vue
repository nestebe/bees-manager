<template>
  <div id="app">
    <loading ref="loading"></loading>
    <notification></notification>
    <transition name="page" mode="out-in">
      <component v-if="layout" :is="layout"></component>
    </transition>
  </div>
</template>

<script>
import Loading from "./Loading";
import Notification from "./Notification";
// Load layout components dynamically.
const requireContext = require.context("../layouts", false, /.*\.vue$/);

const layouts = requireContext
  .keys()
  .map(file => [file.replace(/(^.\/)|(\.vue$)/g, ""), requireContext(file)])
  .reduce((components, [name, component]) => {
    components[name] = component;
    return components;
  }, {});

export default {
  el: "#app",
  components: {
    Loading,
    Notification
  },
  data: () => ({
    layout: null,
    defaultLayout: "app"
  }),
  mounted() {
    this.$loading = this.$refs.loading;
  },
  methods: {
    /**
     * Set the application layout.
     *
     * @param {String} layout
     */
    setLayout(layout) {
      if (!layout || !layouts[layout]) {
        layout = this.defaultLayout;
      }

      this.layout = layouts[layout];
    }
  }
};
</script>
