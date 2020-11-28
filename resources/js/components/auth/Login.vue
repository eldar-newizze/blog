<template>
    <div>
        <div class="banner-inner">
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Signin</li>
        </ol>

        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <h3 class="tittle">Sign In Now</h3>
                <div class="row inner-sec">
                    <div class="login p-5 bg-light mx-auto mw-100">

                        <div v-if="errors.length" class="alert alert-danger">
                            <ul class="mb-0">
                                <li v-for="error in errors">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>

                        <form method="post">
                            <div class="form-group">
                                <label >Email address</label>
                                <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input v-model="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input v-model="checkMeOut" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label  class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4" @click.prevent="onSubmit">Sign In</button>
                            <p><a href="register.html"> Don't have an account?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Login",
    data: () => ({
        email: '',
        password: '',
        checkMeOut: false,
        errors: []
    }),
    props: ['app'],
    methods: {
        onSubmit() {
            this.errors = []

            if (!this.email) {
                this.errors.push("Введите email")
            }

            if (!this.password) {
                this.errors.push("Введите пароль")
            }

            if (!this.errors.length) {
                const data = {
                    email: this.email,
                    password: this.password
                }

                axios.post('api/auth/login', data)
                    .then(res => {
                        if (this.checkMeOut) {
                            //localStorage.user = JSON.stringify(res.data)
                            localStorage.setItem('user', res.data.name)
                        }
                        this.app.user = res.data
                        this.$router.push("/")
                    }).catch(errors => {
                    //this.errors.push(errors.response.data.error)
                })
            }
        }
    }
}
</script>

<style scoped>

</style>
