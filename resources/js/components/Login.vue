<template>
    <div class="wrapper full-page-wrapper page-auth page-login text-center">
        <div class="inner-page">
            <div class="logo">
                <a href="">MeetTech</a>
            </div>
            <div class="login-box center-block">
                <form class="form-horizontal" role="form">
                    <p class="title">Use your username</p>
                    <div class="form-group">
                        <label for="username" class="control-label sr-only">Username</label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" v-model="username" placeholder="username" id="username"
                                       class="form-control">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <label for="password" class="control-label sr-only">Password</label>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="password" v-model="password" placeholder="password" id="password"
                                       class="form-control">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                    </div>
                    <button @click="login"
                            type="button"
                            class="btn btn-custom-primary btn-lg btn-block btn-auth">
                        <i class="fa fa-arrow-circle-o-right"></i> Login
                    </button>
                </form>
                <div class="links">
                    <p><a href="/">Go Back Home</a></p>
                    <p><a href="/register">Create New Account</a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                username: '',
                password: ''
            }
        },
        methods: {
            login(){
                axios.post(
                    '/api/login',
                    {
                        email: this.username,
                        password: this.password,
                    }
                ).then(({data}) => {
                    location.href='/dashboard'
                }).catch((error) => {
                    alert('Error occurred while logging in')
                }).finally(() => {

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
</style>