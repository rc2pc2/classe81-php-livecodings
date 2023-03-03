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
                        <li class="nav-item">
                            <router-link class="nav-link"
                            :class="this.$route.name === 'home' ? 'active': ''"
                            aria-current="page" :to="{name: 'home'}">
                                Home
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link"
                            :class="this.$route.name === 'posts' ? 'active': ''"
                            :to="{ name: 'posts'}">
                                Posts
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link"
                            :class="this.$route.name === 'about-us' ? 'active': ''"
                            :to="{ name: 'about-us'}">
                                About us
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
    name: 'AppHeader'
}
</script>
<style lang="">

</style>