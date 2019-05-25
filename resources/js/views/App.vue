<template>
    <div>
        <div style="background-color: #ddd;">
            <p>nav</p>
            <router-link :to="{ name: 'sign_up' }">sign up</router-link>
            <router-link :to="{ name: 'sign_in' }">sign in</router-link>
        </div>

        <div class="container">
            <router-view></router-view>
        </div>

        <div style="background-color: #eee;">footer</div>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>
