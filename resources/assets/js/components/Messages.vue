<template>
  <div>
    <input type="text" class="form-control search" name="" id="" v-model="filter" placeholder="search...">
    <h1>Jeff</h1>
  </div>
</template>

<script>
import axios from "axios";
export default {
  mounted(){
    console.log("Component Messages mounted.");
  },
  created:function () {
    let self = this;
    axios
      .get("message/read")
      .then(response=>{
        console.log(response);
      })
      .catch(error=>{
        console.log(error);
      })
  }
}
</script>
