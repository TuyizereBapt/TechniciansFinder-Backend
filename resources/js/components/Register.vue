<template>
    <div class="wrapper full-page-wrapper page-auth page-register text-center">
        <div class="inner-page">
            <div class="logo">
                <a href="">MeetTech</a>
            </div>
            <div class="register-box center-block">
                <form>
                    <p class="title">Create Your Account</p>
                    <div v-if="operation.isError" class="alert alert-danger" style="display: block;">
                        <span v-for="(error,index) in operation.errors" :key="index">{{error}}</span>
                        <button type="button" class="close">×</button>
                    </div>
                    <input type="text" v-model="f_name" placeholder="First name" class="form-control">
                    <input type="text" v-model="l_name" placeholder="Last name" class="form-control">
                    <input type="email" v-model="email" placeholder="Email" class="form-control">
                    <input type="text" v-model="phone" autocomplete="off" placeholder="Phone" class="form-control">
                    <div class="row mg-t-4">
                        <div class="col-md-6">
                            <input v-model="password" type="password" placeholder="password" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input v-model="password_confirmation" type="password" placeholder="repeat password"
                                   class="form-control">
                        </div>
                    </div>
                    <button @click="register"
                            type="button"
                            class="btn btn-custom-primary btn-lg btn-block btn-auth">
                        <i class="fa fa-check-circle"></i> Register
                    </button>
                </form>
                <div class="links">
                    <p><a href="/">Go Back Home</a></p>
                    <p><a href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        mounted(){

        },
        data(){
            return {
                f_name: '',
                l_name: '',
                email: '',
                phone: '',
                password: '',
                password_confirmation: '',
                operation: {
                    errors: [],
                    isError: false,
                },
            }
        },
        methods: {
            register(){

                this.operation.isError = false
                axios.post(
                    '/api/register',
                    {
                        f_name: this.f_name,
                        l_name: this.l_name,
                        email: this.email,
                        phone: this.phone,
                        password: this.password,
                        password_confirmation: this.password_confirmation,
                    }
                ).then(({data}) => {
                    console.log('User', data.data)
                }).catch((error) => {
                    this.operation.isError = true
                    this.operation.errors.length = 0

                    console.log('Error',error.response.data)
                    if (error.response.data.errors) {
                        let errors = error.response.data.errors
                        Object.keys(errors).forEach((key) => {
                            this.operation.errors.push(errors[key][0])
                        });
                    } else {
                        this.operation.errors.push('An error occurred')
                    }
                })
            }
        }
    }
</script>
<style scoped lang="scss">

    .logo {
        a {
            text-decoration: none;
            font-size: 32px;
            font-weight: bold;
        }
    }

    /*.page-auth .center-block {
        width: 0%;
    }*/
</style>