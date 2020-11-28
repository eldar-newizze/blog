<template>
    <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
        <span>Welcome Back!</span>

        <span class="mx-lg-4 mx-md-2  mx-1" v-if="!app.user">
                 <router-link to="/login">
                    <i class="fas fa-lock"></i> Sign In
                 </router-link>
            </span>
        <span v-if="!app.user">
                 <router-link to="/register" >
                   <i class="far fa-user"></i> Register
                 </router-link>
            </span>



        <span class="mx-lg-4 mx-md-2  mx-1" v-else>
                    <i class="fas fa-lock">{{ app.user.name }}</i>
                    <a @click.prevent="logout" href="javascript:;" class="dropdown-item">Logout</a>
            </span>
    </div>
</template>

<script>
export default {
    name: "Navbar",
    props: ["app"],
    data: () => ({}),
    mounted() {
        if (localStorage.user) {
            this.app.user = {
                'name': localStorage.user
            }
        }
        console.log(this.app.user.name)
    },
    watch: {

    },
    methods: {
        logout()
        {
            axios.get('auth/logout')
                .then(() => {
                    this.app.user = null
                    this.$router.push('/login')
                    localStorage.removeItem('user');
                })
        }
    }
}
</script>

<style scoped>

</style>
