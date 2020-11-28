<template>
    <div>
        <div class="banner-inner">
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Register</li>
        </ol>
        <!--//banner-->
        <!--/main-->
        <section class="main-content-w3layouts-agileits">
            <div class="container">
                <h3 class="tittle">Register Now</h3>
                <div class="inner-sec">
                    <div class="login p-5 bg-light mx-auto mw-100">

                        <div v-if="errors.length" class="alert alert-danger">
                            <ul class="mb-0">
                                <li v-for="error in errors">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>

                        <form method="post" >
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label >Username</label>

                                    <input v-model="username" type="text" name="username" class="form-control" id="username" placeholder="username" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label >Email</label>
                                    <input v-model="email" type="text" name="email" class="form-control" id="email" placeholder="email" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Password</label>
                                    <input v-model="password1" type="password" name="password1" class="form-control" id="password1" placeholder="pass" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label f>Confirm Password</label>
                                    <input v-model="password2" type="password" name="password2" class="form-control" id="password2" placeholder="pass" required="">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4" @click.prevent="onSubmit">Register</button>
                            <p>
                                <a href="#">By clicking Signup, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Register",
    props: ['app'],
    data: () => ({
        username: '',
        email: '',
        password1: '',
        password2: '',
        errors: []
    }),
    methods: {
        onSubmit()
        {
            this.errors = []

            if (!this.username) {
                this.errors.push("Введите имя")
            }

            if (!this.email) {
                this.errors.push("Введите email")
            }

            if (!this.password1) {
                this.errors.push("Введите пароль")
            }

            if (!this.password2) {
                this.errors.push("Введите пароль еще раз")
            }

            if (this.password1 !== this.password2) {
                this.errors.push("Пароли не совпадают")
            }

            if (!this.errors.length) {
                const data = {
                    username: this.username,
                    email: this.email,
                    password: this.password1
                }

                axios.post('api/auth/register', data)
                    .then(res => {
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
