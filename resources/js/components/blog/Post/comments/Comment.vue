<template>
   <div>
       <img src="images/t1.jpg" alt="" class="img-fluid" />
       <div class="media-body">
           <h5 class="mt-0">{{ username }}</h5>
           <p>{{comment }}</p>
       </div>
   </div>
</template>

<script>
export default {
    name: "Comment",
    props: {
        username: {
            type: String,
            default: 'NULL'
        },
        comment: {
            type: String,
            default: 'NULL'
        }
    }
}
</script>

<style scoped>

</style>
