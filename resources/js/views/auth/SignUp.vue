<template>
    <div class="sign-up">
        <div class="error" v-if="error">
            <b-alert variant="danger">
                <h4>{{ error.message }}</h4>
                <p v-for="(value,index) in error.errors">
                    {{ index }} - {{ value.join(' ') }}
                </p>
            </b-alert>
        </div>

        <div class="success" v-if="success">
            <b-alert
                :show="dismissCountDown"
                variant="success"
                @dismissed="dismissCountDown=0"
                @dismiss-count-down="countDownChanged"
            >
                <p>Jump to login page after {{ dismissCountDown }} seconds...</p>
                <b-progress
                    variant="success"
                    :max="dismissSecs"
                    :value="dismissCountDown"
                    height="4px"
                ></b-progress>
            </b-alert>
        </div>

        <b-form @submit="onSubmit" @reset="onReset" v-if="show">
            <b-form-group
                id="input-group-1"
                label="E-mail"
                label-for="input-1"
                :description="description_1"
                :invalid-feedback="invalidFeedback_1"
                :valid-feedback="validFeedback_1"
                :state="state_1"
            >
                <b-form-input
                    id="input-1"
                    v-model="form.email"
                    type="text"
                    required
                    placeholder="Enter email"
                ></b-form-input>
            </b-form-group>

            <b-form-group
                id="input-group-2"
                label="Password"
                label-for="input-2"
                :description="description_2"
                :invalid-feedback="invalidFeedback_2"
                :valid-feedback="validFeedback_2"
                :state="state_2"
            >
                <b-form-input
                    id="input-2"
                    v-model="form.password"
                    type="password"
                    required
                    placeholder="Enter password"
                ></b-form-input>
            </b-form-group>

            <b-form-group
                id="input-group-2"
                label="Password confirm"
                label-for="input-2"
                :description="description_3"
                :invalid-feedback="invalidFeedback_3"
                :valid-feedback="validFeedback_3"
                :state="state_3"
            >
                <b-form-input
                    id="input-2"
                    v-model="form.password_confirmation"
                    type="password"
                    required
                    placeholder="Confrim password"
                ></b-form-input>
            </b-form-group>


            <b-button type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
        </b-form>
        <b-card class="mt-3" header="Form Data Result">
            <pre class="m-0">{{ form }}</pre>
        </b-card>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                error: false,
                success: false,
                show: true,
                form_submit: false,
                dismissCountDown: 0,
                dismissSecs: 3,
                form: {
                    email: '',
                    password: '',
                    password_confirmation: '',
                },
            }
        },
        created() {

        },
        methods: {
            onSubmit(evt) {
                evt.preventDefault();
                this.form_submit = true;
                if (this.state) {
                    alert(JSON.stringify(this.form));
                }
                // alert('不正确');
                const params = JSON.stringify(this.form);
                axios
                    .post('/api/users', this.form)
                    .then(response => {
                        console.log(response.data);
                        this.error = false;
                        this.success = true;
                        this.dismissCountDown = this.dismissSecs;
                    })
                    .catch(error => {
                        console.log(error.response.data || error);
                        this.error = error.response.data;
                    })

            },
            onReset(evt) {
                evt.preventDefault()
                // Reset our form values
                this.form.email = '';
                this.form.password = '';
                this.form.password_confirmation = '';
                // Trick to reset/clear native browser form validation state
                this.show = false;
                this.$nextTick(() => {
                    this.show = true;
                    this.form_submit = false;
                });
            },
            countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown;
            },

        },
        computed: {
            state_1() {
                const reg = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,})$/;
                return reg.test(this.form.email);
            },
            description_1() {
                return !this.invalidFeedback_1 && !this.validFeedback_1 ? 'Email required' : '';
            },
            invalidFeedback_1() {
                if (this.form_submit && !this.form.email) {
                    return 'email cannot be empty'
                }
                return this.state_1 !== true && this.form.email ? 'Invalid email' : '';
            },
            validFeedback_1() {
                return this.state_1 === true ? 'ok' : '';
            },

            state_2() {
                const reg = /^[_a-zA-Z0-9-]{6,20}$/;
                return reg.test(this.form.password);
            },
            description_2() {
                return !this.invalidFeedback_2 && !this.validFeedback_2 ? '密码由字母数字下划线中划线组成, 且大于6位' : '';
            },
            invalidFeedback_2() {
                if (this.form_submit && !this.form.password) {
                    return 'password cannot be empty'
                }
                return this.state_2 !== true && this.form.password ? '密码由字母数字下划线中划线组成, 且大于6位' : '';
            },
            validFeedback_2() {
                return this.state_2 === true ? 'ok' : '';
            },

            state_3() {
                return this.state_2 && this.form.password_confirmation === this.form.password;
            },
            description_3() {
                return !this.invalidFeedback_3 && !this.validFeedback_3 ? '' : '';
            },
            invalidFeedback_3() {
                if (this.form_submit && !this.form.password_confirmation) {
                    return 'password confimation cannot be empty';
                }
                return this.form.password_confirmation && this.form.password_confirmation !== this.form.password ? 'The password confirmation does not match.' : '';
            },
            validFeedback_3() {
                return this.state_3 === true ? 'ok' : '';
            },
            state() {
                return this.state_1 && this.state_2 && this.state_3;
            }

        },


    }
</script>

<style scoped>

</style>
