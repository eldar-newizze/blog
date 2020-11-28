<template>


    <div>

        <div class="comment-top">
            <h4>Comments</h4>
            <div class="media" v-for="comment in comments">
                <comment :username="comment.username" :comment="comment.comment" ></comment>
            </div>
        </div>

    <CommentsForm></CommentsForm>

    </div>


</template>

<script>
import Comment from "./Post/comments/Comment";
import CommentsForm from "./Post/comments/CommentsForm";

export default {
    name: "Comments",
    components: {
        Comment,
        CommentsForm
    },
    data: () => ({
        comments: [],
        id: ''
    }),
    mounted() {
        this.loadComments(this.$route.params.id)
    },
    methods: {
        loadComments(id) {
            axios.post('api/comments/' + id)
                .then(res => {
                    console.log(res.data)
                    this.comments = res.data.comments

                    this.id = res.data.post_id


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
