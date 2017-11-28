<template>
  <div>
    <button v-show="isconnect">
      <a href="">
        Add <i class="fa fa-plus-square" aria-hidden="true"></i>  
      </a>
    </button>
    <div class="row">
		  <div class="col-sm-12">
        <one-projet :isconnect="isconnect" v-for="projet in projets" v-bind:key="projet.id"></one-projet>
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
  components:{
    oneProjet: oneprojet
  },
  data(){
    return{
      projets: []
    }
  },
  methods: {}
};
</script>
