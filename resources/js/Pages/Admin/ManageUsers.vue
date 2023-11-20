<template>
    <div>
        <h2 class="mb-4">Users</h2>

        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <span v-if="user.roles == null">User</span>
                    <span v-else>{{ user.roles.name }}</span>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [], // Add your users data here
        };
    },
};
</script>

<style>
/* Add your custom styles here */
</style>
