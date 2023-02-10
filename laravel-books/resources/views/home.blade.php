<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2>Main</h2>
                </div>
                @forelse ($books as $book)
                    <div class="col-4 p-4">
                        <h5>
                            {{ $book->title }}
                        </h5>
                        <h6>
                            {{ $book->author }}
                        </h6>
                        <img src="{{ $book->cover }}" alt="" class="img-fluid">
                    </div>
                @empty
                    <p>Non ci sono libri da mostrare</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
