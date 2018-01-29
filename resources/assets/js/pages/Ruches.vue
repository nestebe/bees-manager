<template>
  <v-layout>
      Ruches
  </v-layout>
</template>

<script>
import { mapGetters } from "vuex";

export default {

  computed: mapGetters({
    ruchers: "moduleRucher/ruchers",
    rucher:"moduleRucher/ruchers"
  }),

 async mounted(){
 //  await this.$store.dispatch("moduleRucher/listRuchers");
   //await this.$store.dispatch("moduleRucher/showRucher",1);
  }

};
</script>



