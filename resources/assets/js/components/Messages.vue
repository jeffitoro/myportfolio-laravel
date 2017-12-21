<template>
  <div>
    <input type="text" class="form-control search" name="filter" id="filter" v-model="filter" placeholder="search..." @keyup="autoComplete" @onchange="autoComplete">
    <one-message v-for="(message,index) in messages" :index="index" v-bind:key="message.id" v-bind:messageprop='message'></one-message>
  </div>
</template>

<script>
import axios from "axios";
import onemessage from "./OneMessage.vue";
export default {
  mounted() {
    console.log("Component Messages mounted.");
  },
  components: {
    oneMessage: onemessage
  },
  data() {
    return {
      messages: [],
      filter: ""
    };
  },
  created: function() {
    let self = this;
    axios
      .get("messages/read")
      .then(response => {
        self.messages = response.data;
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
      });
  },
  methods: {
    autoComplete: function() {
      self = this;
      axios
        .get("messages/search", {
          params: { filter: self.filter, messages: self.messages }
        })
        .then(response => {
          this.messages = response.data;
          console.dir(response.data);
          if(!response.data.length && !document.getElementById('msg-empty')){
            let span = document.createElement('span');
            let textnode = document.createTextNode("I Found Any Meesage With this Name.. !!!");
            span.appendChild(textnode);
            span.id = "msg-empty"
            document.getElementById('messages').appendChild(span);
          }
        })
        .catch(error => {
          console.log(error);
        });
      console.log("taille filter: " + this.filter.length);
    }
  }
};
</script>
