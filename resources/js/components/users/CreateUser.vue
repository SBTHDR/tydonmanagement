<template>
    <div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Create User</span>
                <button class="btn btn-outline-primary btn-sm" @click="$emit('view-dashboard')"><i class="fas fa-chevron-left"></i>Back</button>
            </div>

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input v-model="data.name" type="text" class="form-control" id="name" placeholder="Enter your name...">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input v-model="data.email" type="email" class="form-control" id="email" placeholder="Enter your email...">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select v-model="data.role" id="role" class="form-select">
                            <option :value="'user'">User</option>                            
                            <option :value="'admin'">Admin</option>                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
      </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style>

</style>