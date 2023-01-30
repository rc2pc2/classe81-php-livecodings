<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON</title>

    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>

    <div id="app">
        <header class="container p-3">
            <h1>
                PHP Jason
            </h1>
        </header>

        <main class="container">
            <div class="row p-4">
                <div class="col-12">

                <!-- todolist -->
                    <h2>
                        Todolist
                    </h2>

                    <ul class="list-group border">
                        <li v-for="(item, index) in itemsList" :key="index"   class="list-group-item">
                            {{ item.name }}
                        </li>
                    </ul>
                </div>

                <div class="col-12 mt-5">
                    <input type="text" class="input-group" v-model="newTodoItem" @keyup.enter="updateTodoList()">
                </div>

            </div>
        </main>
    </div>


    <script src="script.js"></script>

</body>
</html>