<template>
    <div class="col-sm-4">
		  <!-- <img :src=projetprop.img_url alt="" style="color:black"> -->
		  <img :src='projetprop.img_url' alt="" style="color:black">
      <div class="title"><h2>{{ projetprop.title }}</h2></div>      
      <div class="img-description">
        <p>{{ projetprop.description }}</p>
      </div>
      <div class="buttons" v-show="isconnect">
        <button @click.prevent="editProjet">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </button>
        <button @click.prevent="deleteProjet">
          <i class="fa fa-trash-o" aria-hidden="true"></i>
        </button>
      </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
  props: ["isconnect", "projetprop", "index"],
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    deleteProjet: function(){
      self = this;
      axios.delete('/projet/delete/'+self.projetprop.id)
        .then(response=>{
          this.$el.parentElement.removeChild(this.$el);
        })
        .catch(error =>{
          console.log(error);
        });
    }
  }
};
</script>

