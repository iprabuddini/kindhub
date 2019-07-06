<template>
  <div>
    <h1>Create Teacher</h1>
    <form @submit.prevent="addTeacher">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" v-model="teacher.name">
          </div>
        </div>
        </div>
        <br />
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
          teacher:{}
        }
    },
    methods: {
      addTeacher(){
        event.preventDefault();
        var app = this;
        var newClass = app.teacher;
        axios.post('/teacher/create', newClass)
            .then(function (resp) {
                app.$router.push({path: '/teacher'});
            })
            .catch(function (resp) {
                console.log(resp);
                alert("Could not create your Class");
            });
      }
    }
  }
</script>