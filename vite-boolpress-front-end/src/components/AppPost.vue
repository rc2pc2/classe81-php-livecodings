<template >
    <article class="card single-post p-3">
        <h6 class="card-header">
                {{ post.category.name }} -- {{ post.user.name }}
            </h6>
        <img v-if="!post.image.startsWith('imgs//')" :src="post.image" class="card-img-top" alt="...">

        <img v-else :src="imagePath+'/storage/'+post.image" alt="">

        <div class="card-body">
            <h5 class="card-title">
                {{ post.title }}
            </h5>
            <p>
                <span class="little-tag me-3" v-for="tag in post.tags">
                    #{{ tag.name }}
                </span>
            </p>
            <h6 class="card-subtitle">
                {{ post.post_date }}
            </h6>

            <p class="card-text">
                {{ (isShow) ? post.content : post.content.substr(0, 140) }}...
            </p>

            <router-link v-if="!isShow" :to="{name: 'post', params: {slug: post.slug}}" class="btn btn-primary">
                Read more...
            </router-link>
        </div>

    </article>
</template>
<script>
export default {
    name: 'AppPost',
    data() {
        return {

        }
    },
    props:
        {
            'post': {
                type: Object,
                required: true,
            },
            'isShow': {
                type: Boolean,
                required: false,
                default: false,
            },
            'imagePath' :{
                type: String,
                required: true
            }
        },
}
</script>
<style lang="">

</style>