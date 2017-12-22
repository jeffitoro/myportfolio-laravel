<template>
	<div class="creation">
		<button type="button" class="btn btn-default" data-toggle="modal" :data-target="'#myModal-'+projet.id">
      <i class="fa fa-plus-square" aria-hidden="true"></i>
			<span> Creation</span>          
    </button>
	</div>
</template>

<script>
import axios from "axios";
export default {
  
}
</script>
