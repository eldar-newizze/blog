<template>
    <section class="banner-bottom">
        <!--/blog-->
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-info-middle">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> FEB 15,2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                                            <i class="far fa-thumbs-up"></i> 201 Likes</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comment"></i> 15 Comments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">Amet consectetur adipisicing </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                            aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                            aute irudre dolor in elit sed uta labore dolore reprehender</p>
                        <a href="single.html" class="btn btn-primary read-m">Read More</a>
                    </div>

                    <comments></comments>

                </div>

                <!--//left-->

                <!--right-->
                <information></information>
                <!--//right-->
            </div>
        </div>
    </section>
</template>

<script>
import Information from "./Post/Information";
import Comments from "./Comments";
export default {
    name: "ReadPost",
    components: {
        Information,
        Comments
    },
    data: () => ({
        post: ''
    }),
    props: {

    },
    mounted() {
        this.show(this.$route.params.id)

    },
    methods: {
        show(id) {
            axios.get('/api/posts/' + id)
                .then(res => {
                    this.post = res.data
                })
                .catch(err => {
                    this.not_found = true
                })
        }
    }
}
</script>

<style scoped>

</style>
