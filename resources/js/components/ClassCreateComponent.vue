<template>
  <div>
    <h1>Create A Class</h1>
    <form @submit.prevent="addClass">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" v-model="schoolclass.name">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Description:</label>
              <textarea class="form-control" v-model="schoolclass.description" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-info">Create</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          schoolclass:{}
        }
    },
    methods: {
      addClass(){
        event.preventDefault();
        var app = this;
        var newClass = app.schoolclass;
        axios.post('/class/create', newClass)
            .then(function (resp) {
                app.$router.push({path: '/'});
            })
            .catch(function (resp) {
                console.log(resp);
                alert("Could not create your Class");
            });
      }
    }
  }
</script>