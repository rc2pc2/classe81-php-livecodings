<template>
    <header>

        <nav class="navbar navbar-expand-md bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Boolpress front-end</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" v-for="link in links">
                            <router-link class="nav-link"
                            :class="this.$route.name === link.name ? 'active': ''"
                            aria-current="page" :to="link">
                                {{ link.name }}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
</template>
<script>
export default {
    name: 'AppHeader',
    data() {
        return {

            links: [
                {
                    name: 'home'
                },
                {
                    name: 'contact-us'
                },
                {
                    name: 'posts'
                }
            ],

        }
    },
}
</script>
<style lang="">

</style>