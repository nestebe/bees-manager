<template>
  <div>


    <v-data-table :headers="headers" :items="items" hide-actions class="elevation-1">
      <template slot="items" slot-scope="props">

        <tr @click="select(props.item)">
          <td>{{ props.item.libelle }}</td>
          <td class="text-xs-right">{{ props.item.ville }}</td>
          <td class="justify-center layout px-0">
            <v-btn icon class="mx-0" @click="editItem(props.item)">
              <v-icon color="teal">edit</v-icon>
            </v-btn>
            <v-btn icon class="mx-0" @click="deleteItem(props.index)">
              <v-icon color="pink">delete</v-icon>
            </v-btn>
          </td>

        </tr>
      </template>
      <template slot="no-data">
        <v-btn color="primary" @click="initialize">Reset</v-btn>
      </template>
    </v-data-table>




    <DialogFormRucher :dialogActive="true" />




  </div>


</template>

<script>
  import { mapGetters } from "vuex";
  import DialogFormRucher from "@/components/dialog/DialogFormRucher";

  export default {
    components: {
      DialogFormRucher
    },
    data: () => ({
      dialog: false,
      v: [],
      headers: [
        { text: "Libellé", value: "libelle" },
        { text: "Commune", value: "ville" }
      ],
      items: [],
      item: {
        edit: false,
        libelle: "",
        ville: ""
      }
    }),

    computed: mapGetters({
      ruchers: "moduleRucher/ruchers",
      rucher: "moduleRucher/ruchers"
    }),

    async created() {
      await this.$store.dispatch("moduleRucher/listRuchers");
      this.initialize();
    },

    methods: {
      async select(item) {
        await this.$store.dispatch("moduleRucher/showRucher", item.id);
        console.log(d);
      },
      initialize() {
        this.items = this.ruchers;
      },

      editItem(item) {
        this.item = item;
        this.item.edit = true;
        this.dialog = true;
      },

      deleteItem(index) {
        // alert user for delete
        this.items.splice(index, 1);
      },

      close() {
        this.item.edit = false;
        this.dialog = false;
      },

      save() {
        if (this.item.edit) {
          // edit item
          this.item.edit = false;
        } else {
          this.items.push(this.item);
        }
        this.dialog = false;
      }
    }
  };
</script>