<template>
    <div class="col-sm-4">
		<img src="img/default.png" alt="" style="color:black">
        <div class="img-description">
          <p>Images Description...</p>
      	</div>
        <div class="buttons" v-show="isconnect">
          <button>
            <a href="">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  
            </a>
          </button>
          <button>
            <a href="">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
          </button>
        </div>
    </div>
</template>

<script>
export default {
  props: ["isconnect"],
  mounted() {
    console.log("Component mounted.");
  },
  methods: {}
};
</script>

