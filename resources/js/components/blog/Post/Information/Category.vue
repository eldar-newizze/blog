<template>
    <a href="" @click="sortCategory(id)" >
    <li class="list-group-item d-flex justify-content-between align-items-center">
            <p>{{title}}</p>
            <span class="badge badge-primary badge-pill">14</span>
    </li>
    </a>
</template>

<script>
export default {
    name: "Category",
    props: {
        title: {
            type: String,
            default: 'NULL'
        },
        time: {
            default: 'NULL'
        },
        id: {type: Number}
    },
    methods: {
        sortCategory(id)
        {
            this.$router.push('/filter' + id)
        }
    }
}
</script>

<style scoped>

</style>
