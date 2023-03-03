

<script>
import axios from 'axios';

export default {
    name: 'AppMain',
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


<template >
    <section>
        <div class="container">
            <div class="row">
                <!-- TODO loader -->
                <div class="col-12">
                    <h2>
                        Posts:
                    </h2>
                </div>
            </div>

            <div class="row justify-content-around">
                <article class="col-5 single-post card mb-4 p-3 " v-for="post in posts">
                    <h6 class="card-header">
                            {{ post.category.name }} -- {{ post.author }}
                        </h6>
                    <img :src="post.image" class="card-img-top" alt="...">
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
                            {{ post.content.substr(0, 140) }}...
                        </p>

                        <a href="#" class="btn btn-primary">Read more...</a>
                    </div>

                </article>

            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>

</style>