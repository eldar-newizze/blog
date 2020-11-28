<template>
    <div class="comment-top">
        <h4>Leave a Comment</h4>
        <div class="comment-bottom">
            <form action="" method="get" ENCTYPE="multipart/form-data">
                <input v-model="form.name" class="form-control" type="text" name="name" placeholder="Name" required="">
                <input v-model="form.email" class="form-control" type="email" name="email" placeholder="Email" required="">

                <textarea v-model="form.comment" class="form-control" name="comment" placeholder="Message..." required=""></textarea>
                <button type="submit" class="btn btn-primary submit" @click="store" >Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "CommentsForm",
    data: () => ({
        form: {
            name: '',
            email: '',
            comment: '',
            post_id: ''
        }
    }),
    mounted() {
        this.form.post_id = this.$route.params.id
    },
    methods: {
        store() {
            axios.post('/api/comments', this.form, {
                headers: {
                    "Content-type": "application/json"
                }
            })
                .then(res => {
                    // if (res.data.status) {
                    this.$router.push('/post' + this.form.post_id)
                    // }
                })
                .catch(err => {
                    console.log(err.response.data)
                })
        },
    }
}
</script>

<style scoped>

</style>
