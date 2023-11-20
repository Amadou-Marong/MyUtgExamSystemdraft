<template>
    <div>
        <h2 class="mb-4">Manage Role</h2>

        <form @submit="updateRole">
            <div class="row">
                <div class="col-md-2">
                    <label for="">Select User</label>
                </div>
                <div class="col-md-4">
                    <select v-model="selectedUser" required class="form-control" style="border: 1px solid;">
                        <option value="">Select User</option>
                        <option v-for="user in users" :key="user.id" :value="user.id">{{ user.name }}</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">Select Role</label>
                </div>
                <div class="col-md-4">
                    <select v-model="selectedRole" required class="form-control" style="border: 1px solid;">
                        <option value="">Select Role</option>
                        <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.name }}</option>
                        <option value="0">User</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Update Role" class="btn btn-primary">
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedUser: '',
            selectedRole: '',
            users: [],
            roles: []
        };
    },
    mounted() {
        // Fetch users and roles data from the server
        this.fetchUsers();
        this.fetchRoles();
    },
    methods: {
        fetchUsers() {
            // Make an API request to fetch users data
            // Assign the response to the 'users' data property
        },
        fetchRoles() {
            // Make an API request to fetch roles data
            // Assign the response to the 'roles' data property
        },
        updateRole(event) {
            event.preventDefault();
            // Make an API request to update the role
            // Use the selectedUser and selectedRole data properties
        }
    }
};
</script>

<style>
/* Add your custom styles here */
</style>
