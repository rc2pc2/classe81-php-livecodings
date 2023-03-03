<template lang="">
    <div class="row">
                <!-- TODO loader -->
                <div class="col-12">
                    <h2>
                        Posts:
                    </h2>
                </div>
            </div>

    <div class="row justify-content-around">
        <AppPost v-for="post in posts" :post="post" :imagePath="urlAddress" class="col-4"/>
    </div>
</template>
<script>
import AppPost from '../components/AppPost.vue';
import axios from 'axios';

export default {
    name: 'PostsList',
    components:{
        AppPost,
    },
    data() {
        return {
            posts: [],
            loading: false,
            urlAddress: 'http://127.0.0.1:8000',
        }
    },

    methods: {
        getPosts(){
            axios.get(this.urlAddress + '/api/posts/', {
                params: {
                }
            })
            .then((response) => {
                this.posts = response.data.results.data;
            })
            .catch(function (error) {
                console.warn(error);
            });
        }
    },

    created() {
        this.getPosts();
    },
}
</script>
<style lang="">

</style>