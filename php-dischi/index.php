<?php

    // include_once __DIR__ . '/partials/functions.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>

    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/style.css">

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>

    <div id="app">
        <header>
            <section class="logo container">
                <div class="row">
                    <div class="col-12">
                        <img src="./assets/imgs/spotify-logo.png" alt="Spotify logo" class="p-3">
                    </div>
                </div>
            </section>
        </header>

        <main class="p-4">
            <section class="container discs">
                <div class="row justify-content-around">
                    <!-- vfor -->
                    <div class="disc-element p-4 m-3 col-3" v-for="(disc, index) in discsList" :key=index>
                        <div class="disc-cover mb-3">
                            <img :src="disc.poster" :alt="disc.title" class="img-fluid">
                        </div>
                        <div class="disc-info mb-3">
                            <h4>{{ disc.title }}</h4>
                            <h6>{{ disc.author }}</h6>
                            <h4>{{ disc.year }}</h4>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <script src="./js/script.js"></script>

</body>
</html>