<template>
  <div>
      <div class="card">
          <div class="card-header">Manage Users</div>

            <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody v-if="results !== null">
                        <tr v-for="user in results.data" :key="user.id">
                            <th>{{ user.id }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        
                    </tbody>
                    </table>
            </div>
      </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
    mounted() {
        this.getUsers()
    },
    data() {
        return {
            results: null,
            params: {
                page: 1
            }
        }
    },
    methods: {
        getUsers() {
            axios.get('/data/users', { params: this.params }).then(res => {
                    this.results = res.data.results
            })
        }
    }
}
</script>

<style>

</style>