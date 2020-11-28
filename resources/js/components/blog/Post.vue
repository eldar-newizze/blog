<template>
    <article class="blog-grid-top my-5">
        <div class="b-grid-top">
            <div class="blog_info_left_grid">
                <a href="single.html">
                    <img src="images/b4.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="blog-info-middle">
                <ul>
                    <li>
                        <a href="#">
                            <i class="far fa-calendar-alt"></i> {{ date }}</a>
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
            <a href="single.html">{{title}}</a>
        </h3>
        <p>{{description}}</p>
       <a class="btn btn-primary read-m" @click.prevent="thisPost">Read More</a>
    </article>
</template>

<script>
export default {
    name: "Post",
    data: () =>
        ({
            post: {}
        }),
    props: {
        title: {
            type: String,
            default: "NULL"
        },
        description: {
            type: String,
            default: "NULL"
        },
        id: {type: Number},
        date: {}
    },
    methods: {
        thisPost()
        {
            this.$router.push('/post' + this.id)
        }
    }
}
</script>

<style scoped>

</style>
