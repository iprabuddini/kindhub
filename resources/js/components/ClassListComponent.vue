<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="form-group">
                <router-link :to="{name: 'createClass'}" class="btn btn-success">Create new class</router-link>

            </div>
                <div class="table table-borderless" id="table">
                    <table class="table table-borderless" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>                                
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tr v-for="item in items">
                            <td>{{ item.id }}</td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.description }}</td>
                            <td>
                            <button class="button btn-danger" v-bind:class="{ 'is-loading' : isDeleting(item.id) }" @click="deleteItem(item.id)">Delete
                            </button>
                            </td>
                            
                            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          items: [],
        }
      },
      mounted() {
      var _this = this;

      axios.get('/class/all').then(function (response) {
        _this.items = response.data;
      });
    },
    methods: {
        
        isDeleting(id) {
            let index = this.items.findIndex(item => item.id === id)
            return this.items[index].isDeleting
        },
        async deleteItem(id) {
            let index = this.items.findIndex(item => item.id === id)
            Vue.set(this.items[index], 'isDeleting', true)
            await axios.get('/class/' + id)
            this.items.splice(index, 1)
        }
    }
  }
</script>
