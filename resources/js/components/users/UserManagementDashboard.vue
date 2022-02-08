<template>
    <div>
        <div class="card" v-if="active.dashboard">
            <div class="card-header d-flex justify-content-between">
                <span>Manage Users</span>
                <button class="btn btn-outline-primary btn-sm" @click="setActive('createUser')"><i class="fas fa-plus"></i> Create User</button>
            </div>

            <div class="card-body">
                <Paginator v-if="results !== null" v-bind:results="results" v-on:get-page="getPage"></Paginator>
                
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">User Since</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody v-if="results !== null">
                        <tr v-for="user in results.data" :key="user.id">
                            <th>{{ user.id }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.user_since }}</td>
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

        <CreateUser v-if="active.createUser" v-on:view-dashboard="setActive('dashboard')">
            
        </CreateUser>

    </div>
</template>

<script>
import Paginator from '../utilities/pagination/Paginator.vue'
import CreateUser from './CreateUser.vue'
import axios from 'axios'

export default {
    components: {
        Paginator,
        CreateUser
    },
    mounted() {
        this.getUsers()
    },
    data() {
        return {
            results: null,
            active: {
                dashboard: true,
                createUser: false,
            },
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
        },
        getPage(event) {
            this.params.page = event
            this.getUsers()
        },
        setActive(component) {
            Object.keys(this.active).forEach(key => this.active[key] = false)
            this.active[component] = true
        }
    }
}
</script>

<style>

</style>