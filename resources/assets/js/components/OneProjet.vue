<template>
  <div>
    <div class="col-sm-4">
		  <!-- <img :src=projetprop.img_url alt="" style="color:black"> -->
		  <img :src='projetprop.img_url' alt="" style="color:black">
      <div class="title"><h2>{{ projetprop.title }}</h2></div>      
      <div class="img-description">
        <p>{{ projetprop.description }}</p>
      </div>
      <div class="buttons" v-show="isconnect">
        <button @click="initUpdate()">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </button>
        <button @click.prevent="deleteProjet">
          <i class="fa fa-trash-o" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="taskModalUpdate" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Mode Edit</h4>
          </div>
          <!-- formulaire -->
          <form v-on:submit.prevent="updateTask" action="" method="POST" enctype="multipart/form-data"> 
            <!-- {{csrf_field()}} -->
            <div class="modal-body">
              <!-- title -->
              <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <input class="form-control" type="text" name="title" id="title" v-model="projetprop.title" required>
              </div>
              <div class="form-group">
                <label for="image" class="control-label">Image</label>
                <label class="btn btn-default form-control" style="padding-bottom:30%;">
                  <div v-if="!image">
                    <img :src="projetprop.img_url" alt="" style="max-width:200px;max-height:200px"/><br>
                    <input accept="image/*" name="image" id="image" type="file" multiple="multiple" @change="onFileChange" ref="myimg">
                  </div>
                  <div v-else>
                    <img :src="image" style="max-width:200px;max-height:200px"/>
                    <button @click="removeImage">Remove image</button>
                  </div>
                </label>
              </div>
              <!-- description -->
              <div class="form-group">
                <label for="description" class="control-label">Description</label>
                <input class="form-control" type="text" name="description" id="description" v-model="projetprop.description" required>
              </div>
              <!-- deadline -->
              <div class="form-group">
                <label for="deadline" class="control-label">Deadline</label>
                <input class="form-control" type="text" name="deadline" id="deadline" v-model="projetprop.deadline" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Edit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
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
      projet: {
        title: "",
        description: "",
        deadline: "",
        img_url: ""
      },
      image: ""
    };
  },
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(files[0]);
      this.img_url=files[0].name;
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
        .delete("/projet/delete/" + self.projetprop.id)
        .then(response => {
          this.$el.parentElement.removeChild(this.$el);
        })
        .catch(error => {
          console.log(error);
        });
    },
    initUpdate() {
      $("#taskModalUpdate").addClass("is-active");
      $("#taskModalUpdate").modal();
    },
    closeModal: function() {
      $("#taskModalUpdate").removeClass("modal");
      $("#taskModalUpdate").removeClass("is-active");
    },
    updateTask: function() {
      let self = this;
      axios
        .post("/projet/edit/" + self.projetprop.id, {
          title: self.projetprop.title,
          description: self.projetprop.description,
          deadline: self.projetprop.deadline,
          image: self.image,
          img_url: self.img_url
        })
        .then(response => {
          // console.log("ici");
          // this.projetprop.img_url = response;
          console.log(response);
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

