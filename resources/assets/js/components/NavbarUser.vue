<template>
<div>

    <v-navigation-drawer
      fixed
      :clipped="$vuetify.breakpoint.width > 1000"
      v-model="drawer"
      app
      light
    >

      <v-list dense>

        <v-list-tile v-for="item in items" :key="item.text"  router v-bind:to="item.link">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>
              {{ item.text }}
            </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-subheader class="mt-3 grey--text text--darken-1">PARAMETRES</v-subheader>

        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon color="grey grey-1">settings</v-icon>
          </v-list-tile-action>
          <v-list-tile-title class="grey--text text--grey-3">Mon compte</v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
     <v-toolbar color="primary" dense fixed clipped-left app>
      <v-toolbar-title
        :style="$vuetify.breakpoint.width > 1264 && 'width: 300px'"
        class="ml-0 pl-3"
        :class="$vuetify.breakpoint.width <= 1264 && 'pr-3'"
      >
        <v-toolbar-side-icon dark @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        <v-icon class="ml-3">fa-youtube</v-icon>
      </v-toolbar-title>

    </v-toolbar>
</div>
</template>


<script>
export default {
  data: () => ({
    drawer: null,
    items: [
      { icon: "trending_up", text: "Rapports", link: "home" },
      { icon: "view_module", text: "Ruchers", link: "ruchers" },
      { icon: "view_carousel", text: "Ruches", link: "ruches" },
      { icon: "zoom_in", text: "Visites", link: "visites" },
      { icon: "thumb_up", text: "Récoltes", link: "recoltes" }
    ],
    items2: [
      { picture: 28, text: "Joseph" },
      { picture: 38, text: "Apple" },
      { picture: 48, text: "Xbox Ahoy" },
      { picture: 58, text: "Nokia" },
      { picture: 78, text: "MKBHD" }
    ]
  }),
  props: {
    source: String
  }
};
</script>