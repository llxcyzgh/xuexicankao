<template>
    <div class="users-show">
        <div class="error" v-if="error">
            <p>{{ error }}</p>
        </div>

        <h3>hello user</h3>
        <div v-if="user">
            <p>{{ user.id }}</p>
            <p>{{ user.name }}</p>
            <p>{{ user.email }}</p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    const getUser = (page, callback) => {
        axios
            .get('/api/users/test')
            .then(response => {
                callback(null, response.data);
            })
            .catch(error => {
                callback(error, error.response.data);
            });
    };

    export default {
        data() {
            return {
                user: null,
                error: null,
            }
        },
        created(){
          alert(5);
          // alert(this.user.id);
          // alert(6);
          this.error='error';
        },
        beforeRouteEnter(to, from, next) {
            getUser(to, (err, data) => {
                next(vm => vm.setData(err, data));
            });
        },
        methods: {
            setData(err, user) {
                if (err) {
                    this.error = err.toString();
                } else {
                    this.user = user;
                    alert(user.email);
                }
            }
        }
    }
</script>

<style scoped>

</style>
