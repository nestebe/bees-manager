<template>
  <v-layout row wrap>
  
    <v-flex xs12 sm12  md12 lg6>
        <Ruchers/>
    </v-flex>
    <v-flex xs12 sm12 md12 lg6>


            <v-card v-if="rucher != null">

                <v-container fill-height fluid>
                  <v-layout fill-height>
                    <v-flex xs12 align-end flexbox>
                      <span class="headline">Rucher: {{rucher.libelle}}</span>
                    </v-flex>
                  </v-layout>
                </v-container>
              <v-card-title>
                <div>
                  <span class="grey--text">Localisation</span><br>
                  <span>{{rucher.adresse1}}</span><br>
                  <span>{{rucher.adresse2}}</span>
                  <span>{{rucher.ville}}</span>
                </div>
              </v-card-title>
              <v-card-actions>
                <v-btn flat color="black">Navigation</v-btn>
              </v-card-actions>
            </v-card>
  
    </v-flex>
  
  </v-layout>
</template>

<script>
  import { mapGetters } from "vuex";
  import Ruchers from "@/components/liste/listRuchers";
  export default {
    components: {
      Ruchers
    },
    computed: mapGetters({
      ruchers: "moduleRucher/ruchers",
      rucher: "moduleRucher/rucher"
    }),

    async mounted() {
      //  await this.$store.dispatch("moduleRucher/listRuchers");
      //await this.$store.dispatch("moduleRucher/showRucher",1);
    }
  };
</script>