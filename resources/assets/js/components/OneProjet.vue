<template>
  <div class="col-sm-4">
		<img :src='projet.img_url' class="" alt="" style="color:black">
    <div class="title"><h2>{{ projet.title }}</h2></div>      
    <div class="img-description"><p>{{ projet.description }}</p></div>
    <div class="buttons" v-show="isconnect">
      <button type="button" class="btn btn-default" data-toggle="modal" :data-target="'#myModal-'+projet.id">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>          
      </button>
      <button type="button" class="btn btn-default" @click.prevent="deleteProjet">
        <i class="fa fa-trash-o" aria-hidden="true"></i>
      </button>
    </div>
    <div class="modal fade" :id="'myModal-'+projet.id" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Mode Edit</h4>
          </div>
          <div class="modal-body">
            <!-- title -->
            <div class="form-group">
              <label for="title" class="control-label">Title</label>
              <input class="form-control" type="text" name="title" id="title" v-model="projet.title" required>
            </div>
            <!-- image -->
            <div class="form-group">
              <label for="image" class="control-label">Image</label>
              <label class="btn btn-default form-control" style="padding-bottom:30%;">
                <div v-if="!image">
                  <img :src="projet.img_url" alt="" style="max-width:128px;max-height:128px"/><br>
                  <input accept="image/*" name="image" id="image" type="file" multiple="multiple" @change="onFileChange" ref="myimg">
                </div>
                <div v-else>
                  <img :src="image" style="max-width:128px;max-height:128px"/>
                  <button @click="removeImage">Remove image</button>
                  </div>
              </label>
            </div>
            <!-- description -->
            <div class="form-group">
              <label for="description" class="control-label">Description</label>
              <input class="form-control" type="text" name="description" id="description" v-model="projet.description" required>
            </div>
            <!-- deadline -->
            <div class="form-group">
              <label for="deadline" class="control-label">Deadline</label>
              <input class="form-control" type="text" name="deadline" id="deadline" v-model="projet.deadline" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" @click="updateTask()">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
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
  data() {
    return {
      projet: this.$props.projetprop,
      image: ""
    };
  },
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(files[0]);
      this.img_url = files[0].name;
    },
    createImage(file) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;

      reader.onload = e => {
        vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function(e) {
      this.image = "";
    },
    deleteProjet: function() {
      self = this;
      axios
        .delete("/projet/delete/" + self.projet.id)
        .then(response => {
          console.log("--DeleteProjet--");
          this.$el.parentElement.removeChild(this.$el);
          console.log("--EndDeleteProjet--");
        })
        .catch(error => {
          console.log(error);
        });
    },
    updateTask: function() {
      let self = this;
      console.log("ID: " + self.projet.id);
      axios
        .post("/projet/edit/" + self.projet.id, {
          title: self.projet.title,
          description: self.projet.description,
          deadline: self.projet.deadline,
          image: self.image,
          img_url: self.img_url
        })
        .then(response => {
          this.projet = response.data;
          console.log("--EditProjet--");
          console.log(response);
          console.log("--EndEditProjet--");
          $("#myModal-" + this.projet.id).modal("hide");
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

