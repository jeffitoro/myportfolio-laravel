<template>
  <div>

    <button class="button is-info" v-on:click.prevent="addProjet" v-show="isconnect">
      <i class="fa fa-plus-square" aria-hidden="true"></i>  
      <span> Add</span>
    </button>
    <div class="row">
		  <div class="col-sm-12">
        <one-projet :isconnect="isconnect" v-for="(projet,index) in projets" v-bind:key="projet.id"></one-projet>
    	</div>
	  </div>
  </div>
</template>

<script>
import axios from "axios";
import oneprojet from "./OneProjet.vue";

export default {
  props: ["isconnect"],
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    oneProjet: oneprojet
  },
  data() {
    return {
      oneprojet: {
        title: "title projet",
        description: "description... longue",
        deadline: 30
      },
      projets: []
    };
  },
  methods: {
    addProjet: function() {
      let self = this;
      axios
        .post("api/projet/insert",self.oneprojet)
          .then(function(response) {
            self.projets.push(response.data);
            console.log(response.data);
        })
        .catch(function(error) {
          console.log("error submit");
          console.log(error);
        });
    }
  }
};
</script>
