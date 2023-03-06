<template>
    <div class="row">
        <AppPost :post="post" :isShow="true" :imagePath="urlAddress" />
    </div>
</template>
<script>
import AppPost from '../components/AppPost.vue';
import axios from 'axios';

export default {

    name: 'SinglePost',
    components: {
        AppPost
    },
    data() {
        return {
            post: null,
            loading: false,
            urlAddress: 'http://127.0.0.1:8000',
        }
    },

    methods: {
        getPost(){
            axios.get(this.urlAddress + `/api/posts/${this.$route.params.slug}`, {
                params: {
                    'api_token' : '7eb37wSfeU37mxZHL0H5QiAEtvNVF9dD9bRNbIqbbMJmADJNb3FobaKBBxLfCSVL1lyN4IX8rker9npo39JnablPzt',
                }
            })
            .then((response) => {
                this.post = response.data.results;
                console.warn(response);
            })
            .catch(function (error) {
                console.warn(error);
            });
        }
    },

    created() {
        this.getPost();
    },
}

</script>
<style lang="">

</style>