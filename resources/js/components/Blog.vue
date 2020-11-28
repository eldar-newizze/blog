<template>
    <section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="tittle">Blog Posts</h3>
            <div class="row inner-sec">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">

                    <div v-if="idCategory" v-for="post in posts">
                        <post :title="post.title" :description="post.description" :id="post.id" :date="post.created_at"></post>
                    </div>

                    <div>
                        <div v-if="!idCategory" v-for="post in posts">
                            <post :title="post.title" :description="post.description" :id="post.id" :date="post.created_at"></post>
                        </div>
                    </div>


                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-left">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--//left-->

                <!--//right-->
                <information></information>
                <!--//right-->
            </div>
        </div>
    </section>
</template>

<script>
import Post from "./blog/Post";
import Information from "./blog/Post/Information";

export default {
    name: "Blog",
    components: {
        Post,
        Information
    },
    data: () => ({
        posts: [],
        idCategory: ''
    }),
    mounted() {
        console.log('Blog')
        if (this.$route.params.id) {
            this.sortCategory(this.$route.params.id)
        } else {
            this.loadPosts()
        }


    },
    methods: {
        loadPosts()
        {
            axios.get('/api/posts')
                .then(res => {
                    this.posts = res.data
                })
        },
        sortCategory(id) {
            axios.post('./api/categories/' + id)
                .then(res => {
                    this.posts = res.data.posts
                    this.id = res.data.idCategory
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
