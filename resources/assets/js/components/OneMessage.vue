<template>
	<div class="row one-msg">	
		<div class="row msg">
			<div class="col-md-4">
				<h3><u>Contact</u></h3>
				<h5>Mail: {{messageprop.email}}</h5>
				<h5>Subject: {{messageprop.subject}}</h5>
			</div>
			<div class="col-md-8">
				<h3><u>Message</u></h3>
				<p>{{messageprop.message}}</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-3 col-md-offset-3">
				<button type="submit" class="btn btn-success btn-block">SendToMe</button>
			</div>
			<div class="col-md-3">
				<button type="button" class="btn btn-danger btn-block" @click="deleteMsg">Delete</button>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  props: ["messageprop", "index"],
  methods:{
	deleteMsg:function(){
		self = this;
		axios
        .delete("messages/delete/" + self.$props.messageprop.id)
        .then(response => {
          console.log("--DeleteProjet--");
          this.$el.parentElement.removeChild(this.$el);
          console.log("--EndDeleteProjet--");
        })
        .catch(error => {
          console.log(error);
        });
	}
  }
};
</script>
