<template>
  <div>
    <input type="text" class="form-control search" name="filter" id="filter" v-model="filter" placeholder="search..." @keyup="autoComplete">
    <one-message v-for="(message,index) in messages" :index="index" v-bind:key="message.id" v-bind:messageprop='message' v-model="filter"></one-message>
  </div>
</template>

<script>
import axios from "axios";
import onemessage from "./OneMessage.vue";
export default {
  mounted(){
    console.log("Component Messages mounted.");
  },
  components:{
    oneMessage:onemessage
  },
  data(){
    return{
      messages:[],
      filter: ""
    };
  },
  created:function () {
    let self = this;
    axios
      .get("messages/read")
      .then(response=>{
        self.messages = response.data;
        console.log(response.data);
      })
      .catch(error=>{
        console.log(error);
      })
  },
  methods:{
    autoComplete: function () {
      self=this;
      if(this.filter.length>2){
        axios
          .get('messages/search',{
            params:{filter:self.filter,messages:self.messages}})
          .then(response => {
            this.messages = response.data;
            console.log(response.data);
          })
          .catch(error=>{
            console.log(error);
          })
      }
    }
  }
}
</script>
