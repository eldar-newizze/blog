<template>
    <header>
        <div class="top-bar_sub_w3layouts container-fluid">
            <div class="row">
                <div class="col-md-4 logo text-left">
                    <a class="navbar-brand" href="index.html">
                        <i class="fab fa-linode"></i> Weblog</a>
                </div>

               <navbar :app="this"></navbar>
                <spinner v-if="loading"></spinner>
                <div v-else-if="initialing">

                </div>


                <div class="col-md-4 log-icons text-right">

                    <ul class="social_list1 mt-3">

                        <li>
                            <a href="#" class="facebook1 mx-2" >
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3 mx-2">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pin">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_top" id="home">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/">Home
                                <span class="sr-only">(current)</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"></a>
                                <router-link class="dropdown-item" to="#">Standard Blog</router-link>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="blog2.html">2 Column Blog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="blog3.html">3 Column Blog</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                    </ul>
                    <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>



                </div>
            </nav>

        </div>
        <router-view :app="this"></router-view>
    </header>

</template>

<script>
import Navbar from "./auth/Navbar";
export default {
    name: "HeaderComponent",
    components: {Navbar},
    data: () => ({
        user: null,
        loading: false,
        initialing: false,
    }),
    mounted() {

        if (localStorage.user) {
            this.user = localStorage.user
            console.log(this.user)
        } else {
            this.init()
        }
    },
    methods: {
        init()
        {

            this.loading = true
            axios.get('api/auth/init')
            .then(res => {
                if (localStorage.user) {
                    this.user = localStorage.user
                    console.log(this.user)
                }
                this.user = res.data.user
                this.initialing = true
                this.loading = false

            })
        }
    }
}
</script>

<style scoped>

</style>
