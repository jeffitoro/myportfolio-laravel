<template>
  <div>

    <button type="button" class="btn-add btn btn-default" v-on:click.prevent="addProjet" v-show="isconnect">
      <i class="fa fa-plus-square" aria-hidden="true"></i>  
      <span> Add</span>
    </button>
    <div class="row">
		  <div class="col-sm-12">
        <one-projet :isconnect="isconnect" v-for="(projet,index) in projets" v-bind:key="projet.id" v-bind:projetprop="projet" :index="index"></one-projet>
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
  created: function() {
    let self = this;
    axios
      .get("/projet/read")
      .then(function(response) {
        console.log("--GETprojetRead--");
        console.dir(response.data);
        self.projets = response.data;
        console.log("--EndGetProjetRead--");
      })
      .catch(function(error) {
        console.log("error log");
        console.log(error);
      });
  },
  data() {
    return {
      oneprojet: {
        title: "title projet",
        description: "description... longue",
        deadline: 30,
        img_url: "img/default.png"
      },
      projets: []
    };
  },
  methods: {
    addProjet: function() {
      let self = this;
      axios
        .post("/projet/insert", self.oneprojet)
        .then(function(response) {
          console.log("--POSTprojetInsert--");
          console.dir(response.data);   
          self.projets.push(response.data);
          console.dir(self.projets);
          console.log("--EndPostProjetInsert--")
        })
        .catch(function(error) {
          console.log("error post");
          console.log(error);
        });
    }
  }
};
</script>
