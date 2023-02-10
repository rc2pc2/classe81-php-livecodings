<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Laravel Houses Index
    </title>


    @vite('resources/js/app.js')
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title mb-4">
                    Houses index
                </h1>
            </div>

                @forelse ($houses as $house)
                    <div class="col-3 p-5">
                        <img class="img-fluid" src="https://img.freepik.com/free-icon/home_318-938462.jpg" alt="">
                        <p>
                            ID: {{ $house->reference }}
                        </p>
                        <p>
                            City: {{ $house->city }}
                        </p>
                        <p>
                            Square meters: {{ $house->square_meters }}
                        </p>
                        <p>
                            Price: {{ $house->price }}€
                        </p>
                    </div>
                @empty
                    <div class="col-12">
                        <p>
                            Non ci sono case da mostrare
                        </p>
                    </div>
                @endforelse

        </div>
    </main>
</body>
</html>